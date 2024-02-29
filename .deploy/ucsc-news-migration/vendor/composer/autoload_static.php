<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81d5b7f762d99d44b9fefc0ce209ed92
{
    public static $files = array (
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tribe\\Libs\\Container\\' => 21,
            'TribeUCSC\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tribe\\Libs\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/moderntribe/square1-container',
        ),
        'TribeUCSC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DI\\Annotation\\Inject' => __DIR__ . '/..' . '/php-di/php-di/src/Annotation/Inject.php',
        'DI\\Annotation\\Injectable' => __DIR__ . '/..' . '/php-di/php-di/src/Annotation/Injectable.php',
        'DI\\CompiledContainer' => __DIR__ . '/..' . '/php-di/php-di/src/CompiledContainer.php',
        'DI\\Compiler\\Compiler' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/Compiler.php',
        'DI\\Compiler\\ObjectCreationCompiler' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/ObjectCreationCompiler.php',
        'DI\\Compiler\\RequestedEntryHolder' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/RequestedEntryHolder.php',
        'DI\\Container' => __DIR__ . '/..' . '/php-di/php-di/src/Container.php',
        'DI\\ContainerBuilder' => __DIR__ . '/..' . '/php-di/php-di/src/ContainerBuilder.php',
        'DI\\Definition\\ArrayDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ArrayDefinition.php',
        'DI\\Definition\\ArrayDefinitionExtension' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ArrayDefinitionExtension.php',
        'DI\\Definition\\AutowireDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/AutowireDefinition.php',
        'DI\\Definition\\DecoratorDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/DecoratorDefinition.php',
        'DI\\Definition\\Definition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Definition.php',
        'DI\\Definition\\Dumper\\ObjectDefinitionDumper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Dumper/ObjectDefinitionDumper.php',
        'DI\\Definition\\EnvironmentVariableDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/EnvironmentVariableDefinition.php',
        'DI\\Definition\\Exception\\InvalidAnnotation' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Exception/InvalidAnnotation.php',
        'DI\\Definition\\Exception\\InvalidDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Exception/InvalidDefinition.php',
        'DI\\Definition\\ExtendsPreviousDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ExtendsPreviousDefinition.php',
        'DI\\Definition\\FactoryDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/FactoryDefinition.php',
        'DI\\Definition\\Helper\\AutowireDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/AutowireDefinitionHelper.php',
        'DI\\Definition\\Helper\\CreateDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/CreateDefinitionHelper.php',
        'DI\\Definition\\Helper\\DefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/DefinitionHelper.php',
        'DI\\Definition\\Helper\\FactoryDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/FactoryDefinitionHelper.php',
        'DI\\Definition\\InstanceDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/InstanceDefinition.php',
        'DI\\Definition\\ObjectDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition.php',
        'DI\\Definition\\ObjectDefinition\\MethodInjection' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition/MethodInjection.php',
        'DI\\Definition\\ObjectDefinition\\PropertyInjection' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition/PropertyInjection.php',
        'DI\\Definition\\Reference' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Reference.php',
        'DI\\Definition\\Resolver\\ArrayResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ArrayResolver.php',
        'DI\\Definition\\Resolver\\DecoratorResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/DecoratorResolver.php',
        'DI\\Definition\\Resolver\\DefinitionResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/DefinitionResolver.php',
        'DI\\Definition\\Resolver\\EnvironmentVariableResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/EnvironmentVariableResolver.php',
        'DI\\Definition\\Resolver\\FactoryResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/FactoryResolver.php',
        'DI\\Definition\\Resolver\\InstanceInjector' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/InstanceInjector.php',
        'DI\\Definition\\Resolver\\ObjectCreator' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ObjectCreator.php',
        'DI\\Definition\\Resolver\\ParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ParameterResolver.php',
        'DI\\Definition\\Resolver\\ResolverDispatcher' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ResolverDispatcher.php',
        'DI\\Definition\\SelfResolvingDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/SelfResolvingDefinition.php',
        'DI\\Definition\\Source\\AnnotationBasedAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/AnnotationBasedAutowiring.php',
        'DI\\Definition\\Source\\Autowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/Autowiring.php',
        'DI\\Definition\\Source\\DefinitionArray' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionArray.php',
        'DI\\Definition\\Source\\DefinitionFile' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionFile.php',
        'DI\\Definition\\Source\\DefinitionNormalizer' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionNormalizer.php',
        'DI\\Definition\\Source\\DefinitionSource' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionSource.php',
        'DI\\Definition\\Source\\MutableDefinitionSource' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/MutableDefinitionSource.php',
        'DI\\Definition\\Source\\NoAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/NoAutowiring.php',
        'DI\\Definition\\Source\\ReflectionBasedAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/ReflectionBasedAutowiring.php',
        'DI\\Definition\\Source\\SourceCache' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/SourceCache.php',
        'DI\\Definition\\Source\\SourceChain' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/SourceChain.php',
        'DI\\Definition\\StringDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/StringDefinition.php',
        'DI\\Definition\\ValueDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ValueDefinition.php',
        'DI\\DependencyException' => __DIR__ . '/..' . '/php-di/php-di/src/DependencyException.php',
        'DI\\FactoryInterface' => __DIR__ . '/..' . '/php-di/php-di/src/FactoryInterface.php',
        'DI\\Factory\\RequestedEntry' => __DIR__ . '/..' . '/php-di/php-di/src/Factory/RequestedEntry.php',
        'DI\\Invoker\\DefinitionParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Invoker/DefinitionParameterResolver.php',
        'DI\\Invoker\\FactoryParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Invoker/FactoryParameterResolver.php',
        'DI\\NotFoundException' => __DIR__ . '/..' . '/php-di/php-di/src/NotFoundException.php',
        'DI\\Proxy\\ProxyFactory' => __DIR__ . '/..' . '/php-di/php-di/src/Proxy/ProxyFactory.php',
        'Invoker\\CallableResolver' => __DIR__ . '/..' . '/php-di/invoker/src/CallableResolver.php',
        'Invoker\\Exception\\InvocationException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/InvocationException.php',
        'Invoker\\Exception\\NotCallableException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/NotCallableException.php',
        'Invoker\\Exception\\NotEnoughParametersException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/NotEnoughParametersException.php',
        'Invoker\\Invoker' => __DIR__ . '/..' . '/php-di/invoker/src/Invoker.php',
        'Invoker\\InvokerInterface' => __DIR__ . '/..' . '/php-di/invoker/src/InvokerInterface.php',
        'Invoker\\ParameterResolver\\AssociativeArrayResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/AssociativeArrayResolver.php',
        'Invoker\\ParameterResolver\\Container\\ParameterNameContainerResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/Container/ParameterNameContainerResolver.php',
        'Invoker\\ParameterResolver\\Container\\TypeHintContainerResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/Container/TypeHintContainerResolver.php',
        'Invoker\\ParameterResolver\\DefaultValueResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/DefaultValueResolver.php',
        'Invoker\\ParameterResolver\\NumericArrayResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/NumericArrayResolver.php',
        'Invoker\\ParameterResolver\\ParameterResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/ParameterResolver.php',
        'Invoker\\ParameterResolver\\ResolverChain' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/ResolverChain.php',
        'Invoker\\ParameterResolver\\TypeHintResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/TypeHintResolver.php',
        'Invoker\\Reflection\\CallableReflection' => __DIR__ . '/..' . '/php-di/invoker/src/Reflection/CallableReflection.php',
        'Laravel\\SerializableClosure\\Contracts\\Serializable' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Contracts/Serializable.php',
        'Laravel\\SerializableClosure\\Contracts\\Signer' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Contracts/Signer.php',
        'Laravel\\SerializableClosure\\Exceptions\\InvalidSignatureException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/InvalidSignatureException.php',
        'Laravel\\SerializableClosure\\Exceptions\\MissingSecretKeyException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/MissingSecretKeyException.php',
        'Laravel\\SerializableClosure\\Exceptions\\PhpVersionNotSupportedException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/PhpVersionNotSupportedException.php',
        'Laravel\\SerializableClosure\\SerializableClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/SerializableClosure.php',
        'Laravel\\SerializableClosure\\Serializers\\Native' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Serializers/Native.php',
        'Laravel\\SerializableClosure\\Serializers\\Signed' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Serializers/Signed.php',
        'Laravel\\SerializableClosure\\Signers\\Hmac' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Signers/Hmac.php',
        'Laravel\\SerializableClosure\\Support\\ClosureScope' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ClosureScope.php',
        'Laravel\\SerializableClosure\\Support\\ClosureStream' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ClosureStream.php',
        'Laravel\\SerializableClosure\\Support\\ReflectionClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ReflectionClosure.php',
        'Laravel\\SerializableClosure\\Support\\SelfReference' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/SelfReference.php',
        'Laravel\\SerializableClosure\\UnsignedSerializableClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/UnsignedSerializableClosure.php',
        'Monolog\\Attribute\\AsMonologProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Attribute/AsMonologProcessor.php',
        'Monolog\\Attribute\\WithMonologChannel' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Attribute/WithMonologChannel.php',
        'Monolog\\DateTimeImmutable' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/DateTimeImmutable.php',
        'Monolog\\ErrorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ErrorHandler.php',
        'Monolog\\Formatter\\ChromePHPFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
        'Monolog\\Formatter\\ElasticaFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
        'Monolog\\Formatter\\ElasticsearchFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticsearchFormatter.php',
        'Monolog\\Formatter\\FlowdockFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
        'Monolog\\Formatter\\FluentdFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
        'Monolog\\Formatter\\FormatterInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
        'Monolog\\Formatter\\GelfMessageFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
        'Monolog\\Formatter\\GoogleCloudLoggingFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/GoogleCloudLoggingFormatter.php',
        'Monolog\\Formatter\\HtmlFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
        'Monolog\\Formatter\\JsonFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
        'Monolog\\Formatter\\LineFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
        'Monolog\\Formatter\\LogglyFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
        'Monolog\\Formatter\\LogmaticFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogmaticFormatter.php',
        'Monolog\\Formatter\\LogstashFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
        'Monolog\\Formatter\\MongoDBFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
        'Monolog\\Formatter\\NormalizerFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
        'Monolog\\Formatter\\ScalarFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
        'Monolog\\Formatter\\SyslogFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/SyslogFormatter.php',
        'Monolog\\Formatter\\WildfireFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
        'Monolog\\Handler\\AbstractHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
        'Monolog\\Handler\\AbstractProcessingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
        'Monolog\\Handler\\AbstractSyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
        'Monolog\\Handler\\AmqpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
        'Monolog\\Handler\\BrowserConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
        'Monolog\\Handler\\BufferHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
        'Monolog\\Handler\\ChromePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
        'Monolog\\Handler\\CouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
        'Monolog\\Handler\\CubeHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
        'Monolog\\Handler\\Curl\\Util' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
        'Monolog\\Handler\\DeduplicationHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
        'Monolog\\Handler\\DoctrineCouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
        'Monolog\\Handler\\DynamoDbHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
        'Monolog\\Handler\\ElasticaHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticaHandler.php',
        'Monolog\\Handler\\ElasticsearchHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticsearchHandler.php',
        'Monolog\\Handler\\ErrorLogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
        'Monolog\\Handler\\FallbackGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FallbackGroupHandler.php',
        'Monolog\\Handler\\FilterHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
        'Monolog\\Handler\\FingersCrossedHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
        'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
        'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
        'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
        'Monolog\\Handler\\FirePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
        'Monolog\\Handler\\FleepHookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
        'Monolog\\Handler\\FlowdockHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
        'Monolog\\Handler\\FormattableHandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php',
        'Monolog\\Handler\\FormattableHandlerTrait' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php',
        'Monolog\\Handler\\GelfHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
        'Monolog\\Handler\\GroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
        'Monolog\\Handler\\Handler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Handler.php',
        'Monolog\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
        'Monolog\\Handler\\HandlerWrapper' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
        'Monolog\\Handler\\IFTTTHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
        'Monolog\\Handler\\InsightOpsHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php',
        'Monolog\\Handler\\LogEntriesHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
        'Monolog\\Handler\\LogglyHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
        'Monolog\\Handler\\LogmaticHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogmaticHandler.php',
        'Monolog\\Handler\\MailHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MailHandler.php',
        'Monolog\\Handler\\MandrillHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
        'Monolog\\Handler\\MissingExtensionException' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
        'Monolog\\Handler\\MongoDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
        'Monolog\\Handler\\NativeMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
        'Monolog\\Handler\\NewRelicHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
        'Monolog\\Handler\\NoopHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NoopHandler.php',
        'Monolog\\Handler\\NullHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NullHandler.php',
        'Monolog\\Handler\\OverflowHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/OverflowHandler.php',
        'Monolog\\Handler\\PHPConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
        'Monolog\\Handler\\ProcessHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ProcessHandler.php',
        'Monolog\\Handler\\ProcessableHandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
        'Monolog\\Handler\\ProcessableHandlerTrait' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
        'Monolog\\Handler\\PsrHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
        'Monolog\\Handler\\PushoverHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
        'Monolog\\Handler\\RedisHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
        'Monolog\\Handler\\RedisPubSubHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisPubSubHandler.php',
        'Monolog\\Handler\\RollbarHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
        'Monolog\\Handler\\RotatingFileHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
        'Monolog\\Handler\\SamplingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
        'Monolog\\Handler\\SendGridHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SendGridHandler.php',
        'Monolog\\Handler\\SlackHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
        'Monolog\\Handler\\SlackWebhookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
        'Monolog\\Handler\\Slack\\SlackRecord' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
        'Monolog\\Handler\\SocketHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
        'Monolog\\Handler\\SqsHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SqsHandler.php',
        'Monolog\\Handler\\StreamHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
        'Monolog\\Handler\\SymfonyMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SymfonyMailerHandler.php',
        'Monolog\\Handler\\SyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
        'Monolog\\Handler\\SyslogUdpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
        'Monolog\\Handler\\SyslogUdp\\UdpSocket' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
        'Monolog\\Handler\\TelegramBotHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TelegramBotHandler.php',
        'Monolog\\Handler\\TestHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TestHandler.php',
        'Monolog\\Handler\\WebRequestRecognizerTrait' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WebRequestRecognizerTrait.php',
        'Monolog\\Handler\\WhatFailureGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
        'Monolog\\Handler\\ZendMonitorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
        'Monolog\\Level' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Level.php',
        'Monolog\\LogRecord' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/LogRecord.php',
        'Monolog\\Logger' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Logger.php',
        'Monolog\\Processor\\ClosureContextProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ClosureContextProcessor.php',
        'Monolog\\Processor\\GitProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
        'Monolog\\Processor\\HostnameProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/HostnameProcessor.php',
        'Monolog\\Processor\\IntrospectionProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
        'Monolog\\Processor\\LoadAverageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/LoadAverageProcessor.php',
        'Monolog\\Processor\\MemoryPeakUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
        'Monolog\\Processor\\MemoryProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
        'Monolog\\Processor\\MemoryUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
        'Monolog\\Processor\\MercurialProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
        'Monolog\\Processor\\ProcessIdProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
        'Monolog\\Processor\\ProcessorInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php',
        'Monolog\\Processor\\PsrLogMessageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
        'Monolog\\Processor\\TagProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
        'Monolog\\Processor\\UidProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
        'Monolog\\Processor\\WebProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
        'Monolog\\Registry' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Registry.php',
        'Monolog\\ResettableInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ResettableInterface.php',
        'Monolog\\SignalHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/SignalHandler.php',
        'Monolog\\Test\\TestCase' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Test/TestCase.php',
        'Monolog\\Utils' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Utils.php',
        'PhpDocReader\\AnnotationException' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/AnnotationException.php',
        'PhpDocReader\\PhpDocReader' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/PhpDocReader.php',
        'PhpDocReader\\PhpParser\\TokenParser' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/TokenParser.php',
        'PhpDocReader\\PhpParser\\UseStatementParser' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/UseStatementParser.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'TribeUCSC\\Core' => __DIR__ . '/../..' . '/src/Core.php',
        'TribeUCSC\\Import\\Ajax' => __DIR__ . '/../..' . '/src/Import/Ajax.php',
        'TribeUCSC\\Import\\Cron_Runner' => __DIR__ . '/../..' . '/src/Import/Cron_Runner.php',
        'TribeUCSC\\Import\\Cron_Scheduler' => __DIR__ . '/../..' . '/src/Import/Cron_Scheduler.php',
        'TribeUCSC\\Import\\Import_Subscriber' => __DIR__ . '/../..' . '/src/Import/Import_Subscriber.php',
        'TribeUCSC\\Import\\Processors\\Image' => __DIR__ . '/../..' . '/src/Import/Processors/Image.php',
        'TribeUCSC\\Import\\Processors\\Post' => __DIR__ . '/../..' . '/src/Import/Processors/Post.php',
        'TribeUCSC\\Import\\Processors\\XML_Processor' => __DIR__ . '/../..' . '/src/Import/Processors/XML_Processor.php',
        'TribeUCSC\\Import\\Status' => __DIR__ . '/../..' . '/src/Import/Status.php',
        'TribeUCSC\\Import\\Traits\\With_Log_Entry' => __DIR__ . '/../..' . '/src/Import/Traits/With_Log_Entry.php',
        'TribeUCSC\\Resource\\Resource_Subscriber' => __DIR__ . '/../..' . '/src/Resource/Resource_Subscriber.php',
        'TribeUCSC\\Resource\\Script_Loader' => __DIR__ . '/../..' . '/src/Resource/Script_Loader.php',
        'TribeUCSC\\Settings\\Settings_Page' => __DIR__ . '/../..' . '/src/Settings/Settings_Page.php',
        'TribeUCSC\\Settings\\Settings_Subscriber' => __DIR__ . '/../..' . '/src/Settings/Settings_Subscriber.php',
        'Tribe\\Libs\\Container\\Abstract_Subscriber' => __DIR__ . '/..' . '/moderntribe/square1-container/Abstract_Subscriber.php',
        'Tribe\\Libs\\Container\\Container' => __DIR__ . '/..' . '/moderntribe/square1-container/Container.php',
        'Tribe\\Libs\\Container\\Definer_Interface' => __DIR__ . '/..' . '/moderntribe/square1-container/Definer_Interface.php',
        'Tribe\\Libs\\Container\\MutableContainer' => __DIR__ . '/..' . '/moderntribe/square1-container/MutableContainer.php',
        'Tribe\\Libs\\Container\\Subscriber_Interface' => __DIR__ . '/..' . '/moderntribe/square1-container/Subscriber_Interface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81d5b7f762d99d44b9fefc0ce209ed92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81d5b7f762d99d44b9fefc0ce209ed92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81d5b7f762d99d44b9fefc0ce209ed92::$classMap;

        }, null, ClassLoader::class);
    }
}
