<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIZKfCt5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIZKfCt5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIZKfCt5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIZKfCt5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIZKfCt5\App_KernelDevDebugContainer([
    'container.build_hash' => 'IZKfCt5',
    'container.build_id' => '0a50fe4d',
    'container.build_time' => 1579859722,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIZKfCt5');
