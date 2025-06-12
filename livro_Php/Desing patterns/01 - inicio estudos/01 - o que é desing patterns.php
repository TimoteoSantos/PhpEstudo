<?php

/**
 * EXEMPLOS DE DESIGN PATTERNS EM PHP PURO
 *
 * Este arquivo demonstra alguns dos Design Patterns mais comuns
 * com exemplos simplificados e comentados em PHP para fins de estudo.
 *
 * É importante notar que o Laravel utiliza esses padrões de forma
 * mais sofisticada e integrada, mas entender a base em PHP puro
 * facilitará a compreensão da implementação no framework.
 */

echo "<h1>Exemplos de Design Patterns em PHP</h1>";
echo "<pre>"; // Usar <pre> para formatar a saída do texto no navegador

// -----------------------------------------------------------------------------
// 1. SINGLETON PATTERN (Padrão Criacional)
//    Garante que uma classe tenha apenas uma instância e fornece um ponto
//    de acesso global a ela. Útil para gerenciamento de log, configurações,
//    ou conexões de banco de dados (embora no Laravel, o Service Container
//    gerencie isso de forma mais flexível).
// -----------------------------------------------------------------------------

echo "<h2>1. Singleton Pattern</h2>";

class Logger
{
    private static $instance = null;
    private $logFile;

    // O construtor é privado para evitar a instanciação externa
    private function __construct()
    {
        $this->logFile = 'app_log.txt';
        // Simula a inicialização do logger
        file_put_contents($this->logFile, "Logger inicializado em " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
        echo "Logger: Construtor chamado (instância criada).\n";
    }

    // O método clone é privado para evitar a clonagem da instância
    private function __clone() {}

    // O método unserialize é privado para evitar a desserialização da instância
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    // O método estático público para obter a única instância da classe
    public static function getInstance(): Logger
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Método de exemplo para registrar mensagens
    public function log(string $message)
    {
        $logEntry = date('Y-m-d H:i:s') . " - " . $message . "\n";
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
        echo "Logger: Logged '$message'.\n";
    }
}

// Usando o Singleton:
$logger1 = Logger::getInstance();
$logger1->log("Primeira mensagem de log.");

$logger2 = Logger::getInstance(); // Não cria uma nova instância, retorna a existente
$logger2->log("Segunda mensagem de log.");

// Verificando se são a mesma instância
if ($logger1 === $logger2) {
    echo "Singleton: \$logger1 e \$logger2 são a mesma instância.\n";
} else {
    echo "Singleton: ERRO! \$logger1 e \$logger2 NÃO são a mesma instância.\n";
}
echo "\n";


// -----------------------------------------------------------------------------
// 2. FACTORY METHOD PATTERN (Padrão Criacional)
//    Define uma interface para criar um objeto, mas permite que subclasses
//    decidam qual classe instanciar. Delega a responsabilidade de criação
//    para classes filhas ou métodos específicos.
// -----------------------------------------------------------------------------

echo "<h2>2. Factory Method Pattern</h2>";

// Interface para um produto
interface Product
{
    public function getName(): string;
    public function getType(): string;
}

// Implementações concretas de produtos
class CarProduct implements Product
{
    public function getName(): string
    {
        return "Carro";
    }

    public function getType(): string
    {
        return "Veículo terrestre";
    }
}

class PlaneProduct implements Product
{
    public function getName(): string
    {
        return "Avião";
    }

    public function getType(): string
    {
        return "Veículo aéreo";
    }
}

// Interface do Criador (Factory)
interface ProductFactory
{
    public function createProduct(): Product;
}

// Criadores Concretos (Fábricas)
class CarFactory implements ProductFactory
{
    public function createProduct(): Product
    {
        echo "CarFactory: Criando um Carro...\n";
        return new CarProduct();
    }
}

class PlaneFactory implements ProductFactory
{
    public function createProduct(): Product
    {
        echo "PlaneFactory: Criando um Avião...\n";
        return new PlaneProduct();
    }
}

// Cliente usando a fábrica
function clientCodeFactory(ProductFactory $factory)
{
    $product = $factory->createProduct();
    echo "Factory: Produto criado: " . $product->getName() . " (" . $product->getType() . ")\n";
}

// Usando as fábricas:
clientCodeFactory(new CarFactory());
clientCodeFactory(new PlaneFactory());
echo "\n";


// -----------------------------------------------------------------------------
// 3. STRATEGY PATTERN (Padrão Comportamental)
//    Define uma família de algoritmos, encapsula cada um deles e os torna
//    intercambiáveis. Permite que o algoritmo varie independentemente
//    dos clientes que o utilizam.
// -----------------------------------------------------------------------------

echo "<h2>3. Strategy Pattern</h2>";

// Interface para as estratégias de pagamento
interface PaymentStrategy
{
    public function pay(float $amount): string;
}

// Estratégias concretas
class CreditCardPayment implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Pagando R$" . number_format($amount, 2, ',', '.') . " com cartão de crédito.";
    }
}

class BankTransferPayment implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Pagando R$" . number_format($amount, 2, ',', '.') . " com transferência bancária.";
    }
}

class PayPalPayment implements PaymentStrategy
{
    public function pay(float $amount): string
    {
        return "Pagando R$" . number_format($amount, 2, ',', '.') . " via PayPal.";
    }
}

// Contexto que usa a estratégia
class Order
{
    private $paymentStrategy;
    private $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    // Define a estratégia de pagamento
    public function setPaymentStrategy(PaymentStrategy $strategy)
    {
        $this->paymentStrategy = $strategy;
        echo "Strategy: Estratégia de pagamento definida para: " . get_class($strategy) . "\n";
    }

    // Executa o pagamento usando a estratégia atual
    public function processPayment(): string
    {
        if ($this->paymentStrategy === null) {
            return "Strategy: Nenhuma estratégia de pagamento definida.";
        }
        return $this->paymentStrategy->pay($this->amount);
    }
}

// Usando o Strategy:
$order1 = new Order(150.75);
$order1->setPaymentStrategy(new CreditCardPayment());
echo $order1->processPayment() . "\n";

$order2 = new Order(299.99);
$order2->setPaymentStrategy(new BankTransferPayment());
echo $order2->processPayment() . "\n";

$order3 = new Order(50.00);
$order3->setPaymentStrategy(new PayPalPayment());
echo $order3->processPayment() . "\n";
echo "\n";


// -----------------------------------------------------------------------------
// 4. OBSERVER PATTERN (Padrão Comportamental)
//    Define uma dependência um-para-muitos entre objetos, de modo que quando
//    um objeto muda de estado, todos os seus dependentes são notificados e
//    atualizados automaticamente. (Laravel usa isso com Eventos e Listeners).
// -----------------------------------------------------------------------------

echo "<h2>4. Observer Pattern</h2>";

// O "Subject" (Observável) - quem será observado
interface Subject
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}

// O "Observer" (Observador) - quem observa o Subject
interface Observer
{
    public function update(Subject $subject): void;
}

// Implementação concreta do Subject
class ProductNotifier implements Subject
{
    private $observers = [];
    private $productStatus;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
        echo "Notifier: Observador '" . get_class($observer) . "' anexado.\n";
    }

    public function detach(Observer $observerToRemove): void
    {
        foreach ($this->observers as $key => $observer) {
            if ($observer === $observerToRemove) {
                unset($this->observers[$key]);
                echo "Notifier: Observador '" . get_class($observerToRemove) . "' desanexado.\n";
                return;
            }
        }
    }

    public function notify(): void
    {
        echo "Notifier: Notificando observadores sobre a mudança de status do produto...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeProductStatus(string $status): void
    {
        $this->productStatus = $status;
        echo "Notifier: Status do produto alterado para: '$status'.\n";
        $this->notify(); // Notifica os observadores sobre a mudança
    }

    public function getProductStatus(): string
    {
        return $this->productStatus;
    }
}

// Implementações concretas dos Observers
class EmailNotificationObserver implements Observer
{
    public function update(Subject $subject): void
    {
        if ($subject instanceof ProductNotifier) {
            echo "EmailObserver: Enviando e-mail sobre o status do produto: " . $subject->getProductStatus() . ".\n";
        }
    }
}

class SMSNotificationObserver implements Observer
{
    public function update(Subject $subject): void
    {
        if ($subject instanceof ProductNotifier) {
            echo "SMSObserver: Enviando SMS sobre o status do produto: " . $subject->getProductStatus() . ".\n";
        }
    }
}

// Usando o Observer:
$notifier = new ProductNotifier();

$emailObserver = new EmailNotificationObserver();
$smsObserver = new SMSNotificationObserver();

$notifier->attach($emailObserver);
$notifier->attach($smsObserver);

$notifier->changeProductStatus("Em estoque");
$notifier->changeProductStatus("Fora de estoque");

$notifier->detach($smsObserver); // Remove um observador

$notifier->changeProductStatus("Chegou nova remessa");
echo "\n";


// -----------------------------------------------------------------------------
// 5. FACADE PATTERN (Padrão Estrutural)
//    Fornece uma interface unificada para um conjunto de interfaces em um
//    subsistema. Define uma interface de alto nível que torna o subsistema
//    mais fácil de usar. (As Facades do Laravel são um exemplo poderoso).
// -----------------------------------------------------------------------------

echo "<h2>5. Facade Pattern</h2>";

// Subsistema complexo - Classes que fazem o trabalho real
class PaymentGateway
{
    public function process(float $amount): string
    {
        return "Gateway: Processando pagamento de R$" . $amount . "...\n";
    }
}

class InventoryManager
{
    public function update(string $productName, int $quantity): string
    {
        return "Inventory: Atualizando estoque de '$productName' em " . $quantity . " unidades...\n";
    }

    public function checkStock(string $productName): bool
    {
        echo "Inventory: Verificando estoque de '$productName'...\n";
        return true; // Simula que sempre tem estoque
    }
}

class NotificationService
{
    public function sendConfirmation(string $email, string $message): string
    {
        return "Notification: Enviando confirmação para '$email': '$message'\n";
    }
}

// A Facade que simplifica o acesso ao subsistema
class OrderPlacementFacade
{
    private $paymentGateway;
    private $inventoryManager;
    private $notificationService;

    public function __construct()
    {
        $this->paymentGateway = new PaymentGateway();
        $this->inventoryManager = new InventoryManager();
        $this->notificationService = new NotificationService();
    }

    // Método simplificado para realizar um pedido completo
    public function placeOrder(string $productName, int $quantity, float $price, string $customerEmail): string
    {
        echo "Facade: Iniciando colocação de pedido...\n";

        // Verifica estoque
        if (!$this->inventoryManager->checkStock($productName)) {
            return "Facade: Produto '$productName' fora de estoque.\n";
        }

        // Processa pagamento
        $paymentResult = $this->paymentGateway->process($price * $quantity);
        echo $paymentResult;

        // Atualiza estoque
        $inventoryResult = $this->inventoryManager->update($productName, -$quantity); // Reduzindo estoque
        echo $inventoryResult;

        // Envia notificação
        $notificationResult = $this->notificationService->sendConfirmation($customerEmail, "Seu pedido de $quantity x $productName foi confirmado!");
        echo $notificationResult;

        return "Facade: Pedido de '$productName' concluído com sucesso para '$customerEmail'.\n";
    }
}

// Usando a Facade:
$orderFacade = new OrderPlacementFacade();
echo $orderFacade->placeOrder("Smart TV 50", 1, 2500.00, "joao@example.com");
echo "\n";


// -----------------------------------------------------------------------------
// 6. DEPENDENCY INJECTION (Padrão de Inversão de Controle - IoC)
//    Não é um GoF pattern estrito, mas é fundamental no desenvolvimento moderno
//    e no Laravel. Permite que as dependências de uma classe sejam fornecidas
//    a ela externamente, em vez de a classe criá-las internamente.
//    Promove testabilidade, flexibilidade e baixo acoplamento.
// -----------------------------------------------------------------------------

echo "<h2>6. Dependency Injection (DI)</h2>";

// A dependência (um serviço de e-mail)
interface EmailService
{
    public function send(string $to, string $subject, string $body): string;
}

class SmtpEmailService implements EmailService
{
    public function send(string $to, string $subject, string $body): string
    {
        return "EmailService: Enviando e-mail via SMTP para '$to' - Assunto: '$subject'\n";
    }
}

class MockEmailService implements EmailService // Para testes
{
    public function send(string $to, string $subject, string $body): string
    {
        return "EmailService: SIMULADO! Enviando e-mail de teste para '$to' - Assunto: '$subject'\n";
    }
}

// A classe que tem a dependência (UserNotifier)
class UserNotifier
{
    private $emailService;

    // Injeção de Dependência via Construtor (Constructor Injection)
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
        echo "UserNotifier: Dependência 'EmailService' injetada via construtor.\n";
    }

    public function notifyUser(string $email, string $message): string
    {
        return $this->emailService->send($email, "Notificação", $message);
    }
}

// Usando a Injeção de Dependência:

// 1. Injetando um serviço de e-mail "real"
$realEmailService = new SmtpEmailService();
$userNotifierProd = new UserNotifier($realEmailService);
echo $userNotifierProd->notifyUser("usuario_prod@example.com", "Bem-vindo à nossa plataforma!");

// 2. Injetando um serviço de e-mail "mock" (para testes ou simulação)
$mockEmailService = new MockEmailService();
$userNotifierTest = new UserNotifier($mockEmailService);
echo $userNotifierTest->notifyUser("usuario_test@example.com", "Esta é uma notificação de teste.");
echo "\n";


echo "</pre>"; // Fecha a tag <pre>
?>