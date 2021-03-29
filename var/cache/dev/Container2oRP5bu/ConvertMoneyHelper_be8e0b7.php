<?php

namespace Container2oRP5bu;
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/ConvertMoneyHelperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/ConvertMoneyHelper.php';

class ConvertMoneyHelper_be8e0b7 extends \Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3721e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4c871 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8c1a9 = [
        
    ];

    public function convertAmount(int $amount, ?string $sourceCurrencyCode, ?string $targetCurrencyCode) : string
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, 'convertAmount', array('amount' => $amount, 'sourceCurrencyCode' => $sourceCurrencyCode, 'targetCurrencyCode' => $targetCurrencyCode), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        return $this->valueHolder3721e->convertAmount($amount, $sourceCurrencyCode, $targetCurrencyCode);
    }

    public function getName() : string
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, 'getName', array(), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        return $this->valueHolder3721e->getName();
    }

    public function setCharset(string $charset)
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, 'setCharset', array('charset' => $charset), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        return $this->valueHolder3721e->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, 'getCharset', array(), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        return $this->valueHolder3721e->getCharset();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->charset);

        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper $instance) {
            unset($instance->currencyConverter);
        }, $instance, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper')->__invoke($instance);

        $instance->initializer4c871 = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Currency\Converter\CurrencyConverterInterface $currencyConverter)
    {
        static $reflection;

        if (! $this->valueHolder3721e) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper');
            $this->valueHolder3721e = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper $instance) {
            unset($instance->currencyConverter);
        }, $this, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper')->__invoke($this);

        }

        $this->valueHolder3721e->__construct($currencyConverter);
    }

    public function & __get($name)
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, '__get', ['name' => $name], $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        if (isset(self::$publicProperties8c1a9[$name])) {
            return $this->valueHolder3721e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3721e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3721e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3721e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3721e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, '__isset', array('name' => $name), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3721e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3721e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, '__unset', array('name' => $name), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        $realInstanceReflection = new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3721e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3721e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, '__clone', array(), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        $this->valueHolder3721e = clone $this->valueHolder3721e;
    }

    public function __sleep()
    {
        $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, '__sleep', array(), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;

        return array('valueHolder3721e');
    }

    public function __wakeup()
    {
        unset($this->charset);

        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper $instance) {
            unset($instance->currencyConverter);
        }, $this, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c871 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c871;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4c871 && ($this->initializer4c871->__invoke($valueHolder3721e, $this, 'initializeProxy', array(), $this->initializer4c871) || 1) && $this->valueHolder3721e = $valueHolder3721e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3721e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3721e;
    }


}

if (!\class_exists('ConvertMoneyHelper_be8e0b7', false)) {
    \class_alias(__NAMESPACE__.'\\ConvertMoneyHelper_be8e0b7', 'ConvertMoneyHelper_be8e0b7', false);
}
