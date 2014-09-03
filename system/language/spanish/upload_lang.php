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

$lang['upload_userfile_not_set'] = "No se ha podido encontrar una variable de tipo POST llamada userfile.";
$lang['upload_file_exceeds_limit'] = "El archivo subido excede el tamaño máximo permitido en la configuración de su PHP";
$lang['upload_file_partial'] = "El archivo fue subido parcialmente";
$lang['upload_no_file_selected'] = "No ha seleccionado ningún archivo para subir";
$lang['upload_invalid_filetype'] = "El tipo de archivo que esta tratando de subir no está permitido";
$lang['upload_invalid_filesize'] = "El archivo que está tratando de subir es más largo que el tamaño permitido";
$lang['upload_invalid_dimensions'] = "La imagen que esta tratando de subir excede los tamaños máximos para el alto y/o ancho";
$lang['upload_destination_error'] = "Se encontraron problemas mientras se trataba de mover el archivo subido al directorio de destino final.";
$lang['upload_no_filepath'] = "La dirección para subir el archivo parece no ser válida.";
$lang['upload_no_file_types'] = "Todavía no ha especificado ningún archivo permitido.";
$lang['upload_bad_filename'] = "El archivo enviado ya existe en el servidor.";
$lang['upload_not_writable'] = "El directorio de destino no posee permisos de escritura.";
/* New in 1.6 or Higher */
$lang['upload_file_exceeds_form_limit'] = "El archivo subido excede el tamaño máximo permitido por el formulario.";
$lang['upload_no_temp_directory'] = "La carpeta temporal no existe.";
$lang['upload_unable_to_write_file'] = "El fichero no pudo ser escrito a disco.";
$lang['upload_stopped_by_extension'] = "La carga de archivos fue detenido por la extensión.";

/* End of file upload_lang.php */
/* Location: ./system/language/english/upload_lang.php */