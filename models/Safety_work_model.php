<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Safety_work_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	function get_noticias_home(){
		return $this->db->query("SELECT * FROM `sw_noticias_safety` ORDER BY `sw_noticias_safety`.`orden_noticia` DESC LIMIT 0 , 3"); 
	}
	function get_frases_widget(){
		return $this->db->query("SELECT * FROM `sw_varios_safety` WHERE `sw_varios_safety`.`tipo_varios` = 'frase' ORDER BY `sw_varios_safety`.`orden_varios` DESC "); 
	}
	function get_eventos_widget(){
		return $this->db->query("SELECT * FROM `sw_eventos_solutions` LIMIT 0 , 5"); 
	}
	function get_videos_widget(){
		return $this->db->query("SELECT * FROM `sw_varios_safety` WHERE `sw_varios_safety`.`tipo_varios` = 'video' ORDER BY `sw_varios_safety`.`orden_varios` DESC LIMIT 0 , 4"); 
	}
	function get_talento_humano_home(){
		return $this->db->query("SELECT * FROM `sw_talento_humano_safety` ORDER BY `sw_talento_humano_safety`.`orden_talento` DESC LIMIT 0 , 5"); 
	}	
	function get_salud_bienestar_home(){
		return $this->db->query("SELECT * FROM `sw_salud_bienestar_safety` ORDER BY `sw_salud_bienestar_safety`.`orden_salud` DESC LIMIT 0 , 5"); 
	}
	function get_SST_home(){
		return $this->db->query("SELECT * FROM `sw_SST_safety` ORDER BY `sw_SST_safety`.`orden_SST` DESC LIMIT 0 , 5"); 
	}
	function get_legislaciones_home(){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` ORDER BY `sw_legislaciones_safety`.`fecha_legislacion` DESC LIMIT 0 , 3"); 
	}
	function get_sociales_home(){
		return $this->db->query("SELECT * FROM `sw_sociales_safety` ORDER BY `sw_sociales_safety`.`orden_social` DESC LIMIT 0 , 5"); 
	}
	function get_vida_estilo_home(){
		return $this->db->query("SELECT * FROM `sw_vida_estilo_safety` ORDER BY `sw_vida_estilo_safety`.`orden_vida_estilo` DESC LIMIT 0 , 5"); 
	}
	function get_seguros_home(){
		return $this->db->query("SELECT * FROM `sw_seguros_safety` ORDER BY `sw_seguros_safety`.`orden_seguro` DESC LIMIT 0 , 3"); 
	}
	function get_infografias_home(){
		return $this->db->query("SELECT * FROM `sw_infografias_safety` ORDER BY `sw_infografias_safety`.`orden_infografia` DESC LIMIT 0 , 5"); 
	}
	function get_publicidad(){
		return $this->db->query("SELECT * FROM `sw_publicitarios_solutions` WHERE `sitio_publicitario` = 'Safetywork' ORDER BY `sw_publicitarios_solutions`.`orden_publicitario` DESC "); 
	}
	function get_talento_humano(){
		return $this->db->query("SELECT * FROM `sw_talento_humano_safety` WHERE `estado_talento` = 'activo' ORDER BY `sw_talento_humano_safety`.`orden_talento` DESC "); 
	}
	function get_seguros(){
		return $this->db->query("SELECT * FROM `sw_seguros_safety` WHERE `estado_seguro` = 'activo' ORDER BY `sw_seguros_safety`.`orden_seguro` DESC"); 
	}
	function get_detalle_seguro($url_amigable_seguro){
		return $this->db->query("SELECT * FROM `sw_seguros_safety` WHERE `url_amigable_seguro` = '$url_amigable_seguro'");
	}
	function get_articulos_SST(){
		return $this->db->query("SELECT * FROM `sw_SST_safety` WHERE `estado_SST` = 'activo' ORDER BY `sw_SST_safety`.`orden_SST` DESC"); 
	}
	function get_detalle_SST($url_amigable_SST){
		return $this->db->query("SELECT * FROM `sw_SST_safety` WHERE `url_amigable_SST` = '$url_amigable_SST'"); 
	}
	function get_salud_bienestar(){
		return $this->db->query("SELECT * FROM `sw_salud_bienestar_safety` WHERE `estado_salud` = 'activo' ORDER BY `sw_salud_bienestar_safety`.`orden_salud` DESC "); 
	}
	function get_detalle_salud_bienestar($url_amigable_salud){
		return $this->db->query("SELECT * FROM `sw_salud_bienestar_safety` WHERE `url_amigable_salud` = '$url_amigable_salud'"); 
	}
	function get_articulos_vida_estilo(){
		return $this->db->query("SELECT * FROM `sw_vida_estilo_safety` WHERE `estado_vida_estilo` = 'activo' ORDER BY `sw_vida_estilo_safety`.`orden_vida_estilo` DESC"); 
	}	
	function get_articulos_vida_estilo_tipo($tipo){
		return $this->db->query("SELECT * FROM `sw_vida_estilo_safety` WHERE `tipo_vida_estilo` = '$tipo'"); 
	}
	function get_detalle_articulo_vida_estilo($url_amigable_vida_estilo){
		return $this->db->query("SELECT * FROM `sw_vida_estilo_safety` WHERE `url_amigable_vida_estilo` = '$url_amigable_vida_estilo'"); 
	}
	function get_destacados_vida_estilo(){
		return $this->db->query("SELECT * FROM `sw_vida_estilo_safety` WHERE `destacado_vida_estilo` = 'si' ORDER BY `sw_vida_estilo_safety`.`destacado_vida_estilo` DESC 
		LIMIT 0 , 5"); 
	}	
	function get_articulos_destacados(){ 
		return $this->db->query("SELECT * FROM `sw_articulos_safety` WHERE `destacado_articulo` = 'si' AND `estado_articulo`= 'activo'"); 
	}
	function get_sociales(){
		return $this->db->query("SELECT * FROM `sw_sociales_safety` WHERE `estado_social` = 'activo' ORDER BY `sw_sociales_safety`.`orden_social` DESC "); 
	}
	function get_detalle_social($url_amigable_social){
		return $this->db->query("SELECT * FROM `sw_sociales_safety` WHERE `url_amigable_social` = '$url_amigable_social' ");
	}
	function get_noticias(){
		return $this->db->query("SELECT * FROM `sw_noticias_safety` ORDER BY `orden_noticia` DESC "); 
	}
	function get_detalle_articulo_talento($url_amigable_talento){
		return $this->db->query("SELECT * FROM `sw_talento_humano_safety` WHERE `url_amigable_talento` = '$url_amigable_talento' ");
	}
	function get_detalle_noticia($url_amigable_noticia){
		return $this->db->query("SELECT * FROM `sw_noticias_safety` WHERE `url_amigable_noticia` = '$url_amigable_noticia' ");
	}
	function get_legislaciones(){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` WHERE `estado_legislacion` = 'activo' ORDER BY `sw_legislaciones_safety`.`fecha_publicacion` DESC "); 
	}
	function get_legislaciones_tipo($tipo_legislacion){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` WHERE `tipo_legislacion` = '$tipo_legislacion' ORDER BY `sw_legislaciones_safety`.`fecha_publicacion` DESC "); 
	}
	function get_legislaciones_limit(){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` ORDER BY `fecha_publicacion` DESC LIMIT 0 , 5"); 
	}
	function get_legislaciones_filtro($tipo_legislacion,$categoria_legislacion){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` WHERE `tipo_legislacion` = '$tipo_legislacion' AND `categoria_legislacion` ='$categoria_legislacion' ORDER BY `sw_legislaciones_safety`.`fecha_publicacion` DESC "); 
	}
	function get_detalle_legislacion($url_amigable_legislacion){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` WHERE `url_amigable_legislacion` = '$url_amigable_legislacion' ");
	}
	function get_articulos(){
		return $this->db->get('articulos_safety'); 
	}
	function get_infografias(){
		return $this->db->get('infografias_safety'); 
	}
	function get_detalle_infografia($url_amigable_infografia){
		return $this->db->query("SELECT * FROM `sw_infografias_safety`WHERE `url_amigable_infografia` = '$url_amigable_infografia'");
	}
	function get_eventos_solutions(){
		return $this->db->query("SELECT * FROM `sw_eventos_solutions` ORDER BY `sw_eventos_solutions`.`orden_evento` DESC LIMIT 0,5;"); 
	}
	function get_detalle_articulo($url_amigable){
							return $this->db->query("
												SELECT * FROM `sw_articulos_safety`
												WHERE sw_articulos_safety.url_amigable_articulo = '$url_amigable'
												");
	}
	function get_articulos_categoria($id_categoria){
							return $this->db->query("
													SELECT * 
													FROM `sw_articulos_safety` 
													LEFT JOIN `sw_categorias_articulos` ON `sw_categorias_articulos`.`id_articulo` = `sw_articulos_safety`.`id_articulo` 
													WHERE `sw_categorias_articulos`.`id_categoria` = '$id_categoria'
													");
	}
	function get_categorias_articulos(){
		return $this->db->query("SELECT * FROM `sw_categorias_solutions` WHERE `id_categoria` !='0' AND `tipo_categoria` = 'articulos' ORDER BY `nombre_categoria`");
	}


//BUSCADOR

	function get_resultados_talento($keyword){

		return $this->db->query("SELECT * FROM `sw_talento_humano_safety` WHERE `keywords_talento` LIKE '%' '$keyword' '%'  OR `titulo_talento`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_eventos($keyword){
		return $this->db->query("SELECT * FROM `sw_eventos_solutions` WHERE `nombre_evento`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_salud($keyword){
		return $this->db->query("SELECT * FROM `sw_salud_bienestar_safety` WHERE `keywords_salud` LIKE '%' '$keyword' '%'   OR `titulo_salud`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_seguros($keyword){
		return $this->db->query("SELECT * FROM `sw_seguros_safety` WHERE `keywords_seguro` LIKE '%' '$keyword' '%'   OR `titulo_seguro`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_SST($keyword){
		return $this->db->query("SELECT * FROM `sw_SST_safety` WHERE `keywords_SST` LIKE '%' '$keyword' '%'   OR `titulo_SST`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_legislacion($keyword){
		return $this->db->query("SELECT * FROM `sw_legislaciones_safety` WHERE `keywords_legislacion` LIKE '%' '$keyword' '%'   OR `titulo_legislacion`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_infografias($keyword){
		return $this->db->query("SELECT * FROM `sw_infografias_safety` WHERE `keywords_infografia` LIKE '%' '$keyword' '%'   OR `titulo_infografia`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_noticias($keyword){
		return $this->db->query("SELECT * FROM `sw_noticias_safety` WHERE `keywords_noticia` LIKE '%' '$keyword' '%'   OR `titulo_noticia`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_sociales($keyword){
		return $this->db->query("SELECT * FROM `sw_sociales_safety` WHERE `keywords_social` LIKE '%' '$keyword' '%'   OR `titulo_social`  LIKE '%' '$keyword' '%'  ");
	}

	function get_resultados_profesionales($keyword){
		return $this->db->query("SELECT * FROM `sw_profesionales_solutions` WHERE keywords_profesional LIKE '%' '$keyword' '%' OR nombre_profesional LIKE '%' '$keyword' '%'  ");
	}
	function get_resultados_productos($keyword){
		return $this->db->query("SELECT * FROM `sw_productos_solutions` WHERE keywords_producto LIKE '%' '$keyword' '%' OR nombre_producto LIKE '%' '$keyword' '%'  ");
	}
}