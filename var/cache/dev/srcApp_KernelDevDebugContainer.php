<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTE826fx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTE826fx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTE826fx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTE826fx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTE826fx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'TE826fx',
    'container.build_id' => '755a96ac',
    'container.build_time' => 1603205257,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTE826fx');
