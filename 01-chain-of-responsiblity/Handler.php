<?php
abstract class Handler
{
    protected ?Handler $nextHandler = null;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): void
    {
        if ($this->canHandle($request)) {
            $this->process($request);
        } else {
            echo htmlspecialchars($this->getName()) . ": Cannot process request.<br>";

            if ($this->nextHandler !== null) {
                $this->nextHandler->handle($request);
            } else {
                echo "No office can process this request.<br>";
            }
        }
    }

   abstract protected function canHandle(string $request): bool;
   abstract protected function process(string $request): void;
   abstract protected function getName(): string;

}