<?php
/* 
Plugin Name: Whats Easy
Plugin URI: https://WordPress.org/plugins/Whats-Easy/
Description: Whatsapp without adding contact. Add shortcode [whats-easy] in your posts or pages or widgets. A useful tool for you and your visitors. Helping even the SEO of your site. Start a conversation on whatsapp directly without adding the contact to your phone. In case of doubts, access: <strong><a href="https://fernandodacruz.com/" target="_blank" > FernandodaCruz.com</a></strong> or send an email to whats@fernandodacruz.com
Version: 0.1.1
Author: Fernando da Cruz
Author URI: https://fernandodacruz.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: Whats-Easy
*/

/**
 * Classe whats wasy
 * 
 * Carrega um shortcode para exibir um texto simples
 */
 
// Verifica se não existe nenhum classe com o mesmo nome
if ( ! class_exists('WhatsEasy') ) {

	class WhatsEasy
	{
    
        /**
         * Este é o construtor da classe. Tudo aqui será executado quando o 
         * plugin for ativado.
         */
        public function __construct() {
            /* Adiciona o shortcode */
            add_shortcode( 'whats-easy', array( $this, 'MetodoSimples' ) );
        }
        
        /**
         * Este é um método simples que irá exibir o texto do nosso shortcode
         */
        public function MetodoSimples () {
            return '<script type="text/javascript">
        function fn_abrirConversaWhatsApp(){
            var input = document.getElementById("nnumero").value;
            var texto= document.getElementById("texto").value;
                window.open("https://api.whatsapp.com/send?phone=" + input + "&text=" + texto);
        }
        function fn_abrirConversaWhatsAppWeb(){
            var input = document.getElementById("nnumero").value;
            var texto= document.getElementById("texto").value;
                window.open("https://web.whatsapp.com/send?phone=" + input + "&text=" + texto);
        }
        </script>
        <div class="Texto1">
            <p>
                Enviar mensagem <br/> Mesmo sem ter o contato no WhatsApp
                <br/>
            </p>
        </div>

        <div style="clear: both; text-align: center; width: 100%; margin:auto;">
            <div class="campoNumero">
                Número (exemplo 5541999999999):
                <br/>
                    +<input type="numero" value="55" id="nnumero" style="width: 220px; margin:5px; font-size: 24px; border-radius:4px;    -moz-border-radius:4px;    -webkit-border-radius:4px;    box-shadow: 1px 1px 2px #3a3a3a; -moz-box-shadow: 1px 1px 2px #3a3a3a;    -webkit-box-shadow: 1px 1px 2px #3a3a3a;"/>
                    <br/><br/>
                Mensagem (não obrigatorio):
                <br/>
                    <input type="text"  id="texto" class="campoTexto" style="border-radius:4px;    -moz-border-radius:4px;    -webkit-border-radius:4px;    box-shadow: 1px 1px 2px #3a3a3a; -moz-box-shadow: 1px 1px 2px #3a3a3a;    -webkit-box-shadow: 1px 1px 2px #3a3a3a;"/>
                        <br/><br/>
                    <input type="button" value="Conversa no App WhatsApp" onclick="fn_abrirConversaWhatsApp();" class="botao-link">
                    <input type="button" value="Conversa no PC WhatsApp-Web" onclick="fn_abrirConversaWhatsAppWeb();" class="botao-link">
            </div>
        </div>';

        }
        
	} // WhatsEasy

	/* Carrega a classe */
	$whatseasy_settings = new WhatsEasy();
    
} // class_exists