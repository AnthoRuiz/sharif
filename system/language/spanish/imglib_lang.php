<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2013, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['imglib_source_image_required'] = "Debes especificar una imagen en las preferencias.";
$lang['imglib_gd_required'] = "La librería GD es requerida para esta característica.";
$lang['imglib_gd_required_for_props'] = "Su servidor debe soportar la librería GD para poder determinar las propiedades de la imagen.";
$lang['imglib_unsupported_imagecreate'] = "Su servidor no soporta la función GD que es requerida para este tipo de imagen.";
$lang['imglib_gif_not_supported'] = "Las imágenes de tipo GIF a menudo no son soportadas por las restricciones de la licencia. Puedes usar en vez de estas PNG o JPG.";
$lang['imglib_jpg_not_supported'] = "El tipo de imagen JPG no esta soportado.";
$lang['imglib_png_not_supported'] = "El tipo de imagen PNG no esta soportado.";
$lang['imglib_jpg_or_png_required'] = "EL protocolo de redimensionamiento de imágenes especificado en las preferencias solo funciona con tipos PNG o JPG.";
$lang['imglib_copy_error'] = "Se han encontrado errores mientras se trataba de reemplazar el archivo. Asegurese de que el directorio donde está el fichero posee permisos de escritura.";
$lang['imglib_rotate_unsupported'] = "La rotación de imágenes no está permitida por su servidor.";
$lang['imglib_libpath_invalid'] = "La dirección para la librería de imágenes no es correcta. Por favor configure correctamente la dirección en las preferencias de imágenes.";
$lang['imglib_image_process_failed'] = "Procesado de imagen fallido. Verifique que su servidor soporta la función escogida y que la dirección a la librería de imágenes es correcta.";
$lang['imglib_rotation_angle_required'] = "Se requiere un ángulo de rotación para que la imagen pueda ser rotada.";
$lang['imglib_writing_failed_gif'] = "Imagen GIF ";
$lang['imglib_invalid_path'] = "La dirección de la imagen no es correcta.";
$lang['imglib_copy_failed'] = "Falló la rutina de copia de la imagen.";
$lang['imglib_missing_font'] = "No se ha podido encontrar la fuente que desea usar.";
/* New in 1.6 or Higher */
$lang['imglib_save_failed'] = "No se puede guardar la imagen. Por favor, asegúrese de que el directorio de imágenes y el archivo se pueden escribir.";

/* End of file imglib_lang.php */
/* Location: ./system/language/english/imglib_lang.php */