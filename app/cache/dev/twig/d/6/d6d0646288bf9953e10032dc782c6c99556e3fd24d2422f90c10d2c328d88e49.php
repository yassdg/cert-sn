<?php

/* ::layouti.html.twig */
class __TwigTemplate_200e67c5173d3451b1920c3a3f96bb72e10927db193d63129b5f7c78764398c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80bffbb9bd1aa647b94f8495d8f9d2c4dc373e02276898661c74ac2f390ad7aa = $this->env->getExtension("native_profiler");
        $__internal_80bffbb9bd1aa647b94f8495d8f9d2c4dc373e02276898661c74ac2f390ad7aa->enter($__internal_80bffbb9bd1aa647b94f8495d8f9d2c4dc373e02276898661c74ac2f390ad7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layouti.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    \t<link  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/bootstrap.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/creative.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/glyphicons-halflings.png"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    \t<style type=\"text/css\">
\t\t    .sidebar-nav {
\t\t        padding: 9px 0;
\t\t    }
\t    </style>
\t</head>
\t<body>\t
\t<div id=\"idBande\">
\t</div>
\t     <div id=\"idpresent\">
\t     \t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/logo.png"), "html", null, true);
        echo "\">
\t</div>
\t     
\t   <!------------------- MENU PRINCIPQL DU SITE -------------------------------------->  
\t<div class=\"navbar navbar-inverse\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("cert_incident_accueil");
        echo "\">
                <img id=\"logocert\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/logocert.png"), "html", null, true);
        echo "\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                \t<li class=\"active\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("cert_incident_accueil");
        echo "\"><i class=\"fa  fa-home\"></i>Accueil</a></li>

                   <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("cert_incident_apropos");
        echo "\" ><i class=\"fa  fa-eye\"></i>A propos du CERT</a></li>
              \t\t<li>
              \t\t\t<a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("cert_incident_services");
        echo "\"><i class=\"fa  fa-book\"></i>Service</a>
              \t\t</li>
              \t\t 
              \t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa  fa-user\"></i>Administrateur</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row-fluid\">
\t\t        <div class=\"span12\">
\t\t        \t<!-- C'EST CE DIV QUI CONTIENDRA LE CONTENU DU SITE WEB QUE LES AUTRES PAGES VONT REMPLIR -->

\t\t          <!-- c'est ce contenu suivant qui va changer tout le temps          -->
\t\t        <div  id=\"container\">
\t\t          \t";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t\t          </div><!--/row-->
\t\t        </div><!--/span-->
\t\t      </div><!--/row-->
\t\t</div>

\t\t<div id=\"footer\">
\t\t\t<p>
\t\t\t\tCopyright © 2015 CERT-SN. Tous droits réservés. Designed & developé par Yacine DIENG
\t\t\t</p>
\t\t</div>
\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
        
        $__internal_80bffbb9bd1aa647b94f8495d8f9d2c4dc373e02276898661c74ac2f390ad7aa->leave($__internal_80bffbb9bd1aa647b94f8495d8f9d2c4dc373e02276898661c74ac2f390ad7aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc140c947c5a83a96fc2dcd96260ea4a9b8744ecb6197010a05bff1123f5f636 = $this->env->getExtension("native_profiler");
        $__internal_cc140c947c5a83a96fc2dcd96260ea4a9b8744ecb6197010a05bff1123f5f636->enter($__internal_cc140c947c5a83a96fc2dcd96260ea4a9b8744ecb6197010a05bff1123f5f636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cert sn";
        
        $__internal_cc140c947c5a83a96fc2dcd96260ea4a9b8744ecb6197010a05bff1123f5f636->leave($__internal_cc140c947c5a83a96fc2dcd96260ea4a9b8744ecb6197010a05bff1123f5f636_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_86f5047fc642719bc368587e76804e1378cec90d0a64a820a17e9e999a7599ba = $this->env->getExtension("native_profiler");
        $__internal_86f5047fc642719bc368587e76804e1378cec90d0a64a820a17e9e999a7599ba->enter($__internal_86f5047fc642719bc368587e76804e1378cec90d0a64a820a17e9e999a7599ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "\t\t          \t";
        
        $__internal_86f5047fc642719bc368587e76804e1378cec90d0a64a820a17e9e999a7599ba->leave($__internal_86f5047fc642719bc368587e76804e1378cec90d0a64a820a17e9e999a7599ba_prof);

    }

    public function getTemplateName()
    {
        return "::layouti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 67,  195 => 66,  183 => 7,  172 => 83,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  152 => 78,  140 => 68,  138 => 66,  121 => 52,  115 => 49,  110 => 47,  105 => 45,  98 => 41,  94 => 40,  78 => 27,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  24 => 2,);
    }
}
/* {# c'est le template principale du site web CERT sn#}*/
/* */
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* 		<title>{% block title %}Cert sn{% endblock %}</title>*/
/*     	<link  href="{{ asset('bundles/certincident/css/main.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/css/bootstrap.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/css/bootstrap.responsive.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/css/creative.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/css/plugins/morris.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/css/font-awesome.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/css/main.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certincident/img/glyphicons-halflings.png') }}" rel="stylesheet">*/
/* */
/*     	<style type="text/css">*/
/* 		    .sidebar-nav {*/
/* 		        padding: 9px 0;*/
/* 		    }*/
/* 	    </style>*/
/* 	</head>*/
/* 	<body>	*/
/* 	<div id="idBande">*/
/* 	</div>*/
/* 	     <div id="idpresent">*/
/* 	     	<img src="{{ asset('bundles/certincident/img/logo.png') }}">*/
/* 	</div>*/
/* 	     */
/* 	   <!------------------- MENU PRINCIPQL DU SITE -------------------------------------->  */
/* 	<div class="navbar navbar-inverse">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ path('cert_incident_accueil') }}">*/
/*                 <img id="logocert" src="{{ asset('bundles/certincident/img/logocert.png') }}"></a>*/
/*             </div>*/
/*             <div class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                 	<li class="active"><a href="{{ path('cert_incident_accueil') }}"><i class="fa  fa-home"></i>Accueil</a></li>*/
/* */
/*                    <li><a href="{{ path('cert_incident_apropos') }}" ><i class="fa  fa-eye"></i>A propos du CERT</a></li>*/
/*               		<li>*/
/*               			<a href="{{ path('cert_incident_services') }}"><i class="fa  fa-book"></i>Service</a>*/
/*               		</li>*/
/*               		 */
/*               		<li><a href="{{ path('fos_user_security_login') }}"><i class="fa  fa-user"></i>Administrateur</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!--/.nav-collapse -->*/
/*         </div>*/
/*     </div>*/
/* */
/* 		<div class="container-fluid">*/
/* 			<div class="row-fluid">*/
/* 		        <div class="span12">*/
/* 		        	<!-- C'EST CE DIV QUI CONTIENDRA LE CONTENU DU SITE WEB QUE LES AUTRES PAGES VONT REMPLIR -->*/
/* */
/* 		          <!-- c'est ce contenu suivant qui va changer tout le temps          -->*/
/* 		        <div  id="container">*/
/* 		          	{% block body %}*/
/* 		          	{% endblock %}*/
/* 		          </div><!--/row-->*/
/* 		        </div><!--/span-->*/
/* 		      </div><!--/row-->*/
/* 		</div>*/
/* */
/* 		<div id="footer">*/
/* 			<p>*/
/* 				Copyright © 2015 CERT-SN. Tous droits réservés. Designed & developé par Yacine DIENG*/
/* 			</p>*/
/* 		</div>*/
/* 		<script src="{{ asset('bundles/certincident/js/jquery-1.11.3.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/certincident/js/jquery.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/certincident/js/bootstrap.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/certincident/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/certincident/js/jquery.js') }}"></script>*/
/* 		<script src="{{ asset('bundles/certincident/js/jquery.dataTables.min.js') }}"></script>*/
/* 	</body>*/
/* </html>*/
/* */
