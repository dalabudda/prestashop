<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGba2zaw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGba2zaw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerGba2zaw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerGba2zaw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerGba2zaw\appProdProjectContainer([
    'container.build_hash' => 'Gba2zaw',
    'container.build_id' => '45deaebf',
    'container.build_time' => 1637670244,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGba2zaw');