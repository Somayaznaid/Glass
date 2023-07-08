<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitefee57211ebf824a1a0486db9eca5fef
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitefee57211ebf824a1a0486db9eca5fef', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitefee57211ebf824a1a0486db9eca5fef', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitefee57211ebf824a1a0486db9eca5fef::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
