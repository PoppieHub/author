<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCbQxIOp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCbQxIOp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCbQxIOp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCbQxIOp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCbQxIOp\App_KernelDevDebugContainer([
    'container.build_hash' => 'CbQxIOp',
    'container.build_id' => '363c6db7',
    'container.build_time' => 1638878606,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCbQxIOp');
