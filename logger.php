<?php
// Interface Logger
interface Logger {
    public function logMessage($message);
}

// Classe implémentant l'interface Logger
class ConsoleLogger implements Logger {
    public function logMessage($message) {
        echo "Logging to console:". $message . "<br>";
    }
}

// Classe utilisant la composition avec Logger 
class UserManager {
    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function createUser($username) {
        // Logique de création d'utilisateur
        $this->logger->logMessage("User created:" . $username ."<br>");
    }
}

// Utilisation de la composition avec ConsoleLogger
$consoleLogger = new ConsoleLogger();
$userManager = new UserManager($consoleLogger);
$userManager->createUser("JohnDoe");
?>

