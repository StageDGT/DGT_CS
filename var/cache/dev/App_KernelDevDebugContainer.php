<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEZTpAgF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEZTpAgF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEZTpAgF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEZTpAgF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEZTpAgF\App_KernelDevDebugContainer([
    'container.build_hash' => 'EZTpAgF',
    'container.build_id' => '435ecb40',
    'container.build_time' => 1578925745,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEZTpAgF');
