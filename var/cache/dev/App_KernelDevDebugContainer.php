<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPZ0Oxrv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPZ0Oxrv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPZ0Oxrv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPZ0Oxrv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPZ0Oxrv\App_KernelDevDebugContainer([
    'container.build_hash' => 'PZ0Oxrv',
    'container.build_id' => '2841fc5b',
    'container.build_time' => 1609754882,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPZ0Oxrv');