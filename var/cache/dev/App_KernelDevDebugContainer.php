<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2oRP5bu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2oRP5bu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2oRP5bu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2oRP5bu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2oRP5bu\App_KernelDevDebugContainer([
    'container.build_hash' => '2oRP5bu',
    'container.build_id' => 'd3cd1f84',
    'container.build_time' => 1617034193,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2oRP5bu');