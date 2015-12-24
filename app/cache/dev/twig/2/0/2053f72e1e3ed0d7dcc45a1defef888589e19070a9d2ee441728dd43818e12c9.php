<?php

/* ::layoutiAdmin.html.twig */
class __TwigTemplate_c416f254a7f0b254eb92772a63a6532c0ad50599a66b74fa3fea08a71c0eadbb extends Twig_Template
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
        $__internal_c3b75cf2a7a5bec20061cbcab8788cbe022e430bd552d2c745f80a57feeee6e9 = $this->env->getExtension("native_profiler");
        $__internal_c3b75cf2a7a5bec20061cbcab8788cbe022e430bd552d2c745f80a57feeee6e9->enter($__internal_c3b75cf2a7a5bec20061cbcab8788cbe022e430bd552d2c745f80a57feeee6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutiAdmin.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t
\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    \t<link  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certuser/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certuser/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certuser/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
       <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#utilisateurs').DataTable();
            } );
        </script>
\t</head>

\t<body>
\t\t<div id=\"wrapper\">
\t\t\t\t <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
           
                <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("cert_incident_accueil");
        echo "\">CERT-SN/ Administration</a>
            </div>
            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\">
                                            <strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>declaration d'un nouveau incident par ce dernier...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\">
                                            <strong>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Declaration d'un nouveau incident par ce dernier......</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading\">
                                            <strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</strong>
                                        </h5>
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>declaration d'un nouveau incident par ce dernier...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Tous les nouveaux Messages</a>
                        </li>
                    </ul>
                </li>
                
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Yacine DIENG <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Parametres</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> D&eacute;connexion</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\" id=\"menuAdmin\">
                    <li>
                        <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("admin_users");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion-Utilisateurs</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("admin_users");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion-Roles</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getUrl("admin_annonce");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Gestion-Annonces</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getUrl("admin_alerte");
        echo "\" type=\"hidden\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion-Alertes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getUrl("admin_alerte");
        echo "\" type=\"hidden\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion-Vulnerabilites</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getUrl("cert_incident_ListingIncident");
        echo "\" type=\"hidden\"><i class=\"fa fa-fw fa-dashboard\"></i> Traitement-Incident</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                    \t";
        // line 149
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
\t\t</div>

\t\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certuser/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sdzblog/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"http://www.google.com/jsapi?key=VOTRE_CLE\"></script>
<script type=\"text/javascript\">google.load(\"jquery\", \"1.8\");</script>
\t</body>
</html>
";
        
        $__internal_c3b75cf2a7a5bec20061cbcab8788cbe022e430bd552d2c745f80a57feeee6e9->leave($__internal_c3b75cf2a7a5bec20061cbcab8788cbe022e430bd552d2c745f80a57feeee6e9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d681527749eb53eaf3223701188e6718255a3bf272366a55165932b8bb733317 = $this->env->getExtension("native_profiler");
        $__internal_d681527749eb53eaf3223701188e6718255a3bf272366a55165932b8bb733317->enter($__internal_d681527749eb53eaf3223701188e6718255a3bf272366a55165932b8bb733317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cert sn";
        
        $__internal_d681527749eb53eaf3223701188e6718255a3bf272366a55165932b8bb733317->leave($__internal_d681527749eb53eaf3223701188e6718255a3bf272366a55165932b8bb733317_prof);

    }

    // line 149
    public function block_body($context, array $blocks = array())
    {
        $__internal_be66855bb94284d71b6aa34d48bfb66123402ffdf221b76a15c1ed4139d8a22f = $this->env->getExtension("native_profiler");
        $__internal_be66855bb94284d71b6aa34d48bfb66123402ffdf221b76a15c1ed4139d8a22f->enter($__internal_be66855bb94284d71b6aa34d48bfb66123402ffdf221b76a15c1ed4139d8a22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "\t\t          \t\t";
        
        $__internal_be66855bb94284d71b6aa34d48bfb66123402ffdf221b76a15c1ed4139d8a22f->leave($__internal_be66855bb94284d71b6aa34d48bfb66123402ffdf221b76a15c1ed4139d8a22f_prof);

    }

    public function getTemplateName()
    {
        return "::layoutiAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 150,  265 => 149,  253 => 8,  240 => 163,  236 => 162,  232 => 161,  220 => 151,  218 => 149,  200 => 134,  194 => 131,  188 => 128,  182 => 125,  176 => 122,  170 => 119,  156 => 108,  125 => 80,  106 => 64,  87 => 48,  69 => 33,  45 => 12,  41 => 11,  37 => 10,  32 => 8,  24 => 2,);
    }
}
/* {# c'est le template principale de la partie Administrattion du site web CERT sn #}*/
/* */
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* 		*/
/* 		<title>{% block title %}Cert sn{% endblock %}</title>*/
/* */
/*     	<link  href="{{ asset('bundles/certuser/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certuser/css/sb-admin.css') }}" rel="stylesheet">*/
/*     	<link  href="{{ asset('bundles/certuser/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">	*/
/*        <script type="text/javascript">*/
/*             $(document).ready(function() {*/
/*                 $('#utilisateurs').DataTable();*/
/*             } );*/
/*         </script>*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 		<div id="wrapper">*/
/* 				 <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*            */
/*                 <a class="navbar-brand" href="{{ path('cert_incident_accueil') }}">CERT-SN/ Administration</a>*/
/*             </div>*/
/*             <!-- Top Menu Items -->*/
/*             <ul class="nav navbar-right top-nav">*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu message-dropdown">*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading">*/
/*                                             <strong>{{ app.user.username|upper }}</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>declaration d'un nouveau incident par ce dernier...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading">*/
/*                                             <strong>{{ app.user.username }}</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Declaration d'un nouveau incident par ce dernier......</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                         <h5 class="media-heading">*/
/*                                             <strong>{{ app.user.username }}</strong>*/
/*                                         </h5>*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>declaration d'un nouveau incident par ce dernier...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-footer">*/
/*                             <a href="#">Tous les nouveaux Messages</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 */
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Yacine DIENG <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#"><i class="fa fa-fw fa-gear"></i> Parametres</a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="{{ path('fos_user_security_login') }}"><i class="fa fa-fw fa-power-off"></i> D&eacute;connexion</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/* */
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav" id="menuAdmin">*/
/*                     <li>*/
/*                         <a href="{{ path('admin_users') }}"><i class="fa fa-fw fa-dashboard"></i> Gestion-Utilisateurs</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('admin_users') }}"><i class="fa fa-fw fa-dashboard"></i> Gestion-Roles</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('admin_annonce') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Gestion-Annonces</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('admin_alerte') }}" type="hidden"><i class="fa fa-fw fa-dashboard"></i> Gestion-Alertes</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('admin_alerte') }}" type="hidden"><i class="fa fa-fw fa-dashboard"></i> Gestion-Vulnerabilites</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ url('cert_incident_ListingIncident') }}" type="hidden"><i class="fa fa-fw fa-dashboard"></i> Traitement-Incident</a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/* */
/*             <div class="container-fluid">*/
/* */
/*                 <!-- Page Heading -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                     	{% block body %}*/
/* 		          		{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/* */
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/* 		</div>*/
/* */
/* 		<script src="{{ asset('bundles/certuser/js/jquery.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/sdzblog/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('bundles/certincident/js/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src="http://www.google.com/jsapi?key=VOTRE_CLE"></script>*/
/* <script type="text/javascript">google.load("jquery", "1.8");</script>*/
/* 	</body>*/
/* </html>*/
/* */
