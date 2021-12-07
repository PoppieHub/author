<?php

namespace ContainerYPXBel6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder83a46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc44a9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1c6cc = [
        
    ];

    public function getConnection()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getConnection', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getMetadataFactory', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getExpressionBuilder', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'beginTransaction', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getCache', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'transactional', array('func' => $func), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'commit', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->commit();
    }

    public function rollback()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'rollback', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getClassMetadata', array('className' => $className), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'createQuery', array('dql' => $dql), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'createNamedQuery', array('name' => $name), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'createQueryBuilder', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'flush', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'clear', array('entityName' => $entityName), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->clear($entityName);
    }

    public function close()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'close', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->close();
    }

    public function persist($entity)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'persist', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'remove', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'refresh', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'detach', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'merge', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'contains', array('entity' => $entity), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getEventManager', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getConfiguration', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'isOpen', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getUnitOfWork', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getProxyFactory', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'initializeObject', array('obj' => $obj), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'getFilters', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'isFiltersStateClean', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'hasFilters', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return $this->valueHolder83a46->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc44a9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder83a46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder83a46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder83a46->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, '__get', ['name' => $name], $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        if (isset(self::$publicProperties1c6cc[$name])) {
            return $this->valueHolder83a46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a46;

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

        $targetObject = $this->valueHolder83a46;
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
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder83a46;
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
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, '__isset', array('name' => $name), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder83a46;
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
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, '__unset', array('name' => $name), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder83a46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder83a46;
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
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, '__clone', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        $this->valueHolder83a46 = clone $this->valueHolder83a46;
    }

    public function __sleep()
    {
        $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, '__sleep', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;

        return array('valueHolder83a46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc44a9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc44a9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc44a9 && ($this->initializerc44a9->__invoke($valueHolder83a46, $this, 'initializeProxy', array(), $this->initializerc44a9) || 1) && $this->valueHolder83a46 = $valueHolder83a46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder83a46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder83a46;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
