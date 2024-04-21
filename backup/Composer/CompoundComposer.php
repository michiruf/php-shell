<?php

namespace backup\Composer;

use Composer\Composer;
use Composer\Config;
use Composer\Factory;
use Composer\Installer;
use Composer\IO\BufferIO;

class CompoundComposer
{
    private BufferIO $io;
    private Config $config;
    private Composer $composer;

    public function __construct(string $composerProjectPath, array $packages)
    {
        $this->io = new BufferIO();
        $this->config = Factory::createConfig($this->io, $composerProjectPath);
        $this->composer = Factory::create(
            $this->io,
            [$this->config],
            disablePlugins: true,
            disableScripts: true,
        );

//        $pool = new Pool();
//        $pool->addRepository(new CompositeRepository($composer->getRepositoryManager()->getRepositories()));
//
//        // Create a solver
//        $solver = new Solver($pool);

        $rootPackage = null;

        $installer = new Installer(
            $this->io,
            $this->config,
            $rootPackage,
            null,
            null,
            null,
            null,
            null,
            null,
        );
        $installer->setVerbose();
        $installer->setDevMode();
        $installer->setUpdate(true);
        $installer->run();
    }

    public function install()
    {

    }
}
