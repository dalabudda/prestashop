<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_handler.category_form_data_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_handler.category_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\CategoryFormDataHandler(${($_ = isset($this->services['prestashop.core.command_bus']) ? $this->services['prestashop.core.command_bus'] : $this->load('getPrestashop_Core_CommandBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.image.uploader.category_cover_image_uploader']) ? $this->services['prestashop.adapter.image.uploader.category_cover_image_uploader'] : ($this->services['prestashop.adapter.image.uploader.category_cover_image_uploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryCoverImageUploader())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.image.uploader.category_thumbnail_image_uploader']) ? $this->services['prestashop.adapter.image.uploader.category_thumbnail_image_uploader'] : ($this->services['prestashop.adapter.image.uploader.category_thumbnail_image_uploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryThumbnailImageUploader())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.image.uploader.category_menu_thumbnail_image_uploader']) ? $this->services['prestashop.adapter.image.uploader.category_menu_thumbnail_image_uploader'] : $this->load('getPrestashop_Adapter_Image_Uploader_CategoryMenuThumbnailImageUploaderService.php')) && false ?: '_'});