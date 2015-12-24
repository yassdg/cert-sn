<?php

/* FOSUserBundle::interfaceAdmin.html.twig */
class __TwigTemplate_e7f7eba792ddfde37d7446ccb493038b9bdb0b83379420eb8bff5ff4dd70793b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aac5cedc48a6d954acd214bb13ab69c9a14967108e581de28d6710a8c6a63729 = $this->env->getExtension("native_profiler");
        $__internal_aac5cedc48a6d954acd214bb13ab69c9a14967108e581de28d6710a8c6a63729->enter($__internal_aac5cedc48a6d954acd214bb13ab69c9a14967108e581de28d6710a8c6a63729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::interfaceAdmin.html.twig"));

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
        // line 27
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
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        // line 58
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
        // line 74
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
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu alert-dropdown\">
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Incident</span></a>
                        </li>
                        <li>
                            <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                        </li>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">Voir Tous</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <b class=\"caret\"></b></a>
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
        // line 117
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> D&eacute;connexion</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\" id=\"menuAdmin\">
                    <li class=\"active\">
                        <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("admin_users");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion-Comptes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("admin_users");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Gestion-Annonces</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("admin_users");
        echo "\" type=\"hidden\"><i class=\"fa fa-fw fa-dashboard\"></i> Gestion-Alertes</a>
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
        // line 148
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 150
        echo "                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
\t\t</div>

\t\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certuser/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sdzblog/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t</body>
</html>
";
        
        $__internal_aac5cedc48a6d954acd214bb13ab69c9a14967108e581de28d6710a8c6a63729->leave($__internal_aac5cedc48a6d954acd214bb13ab69c9a14967108e581de28d6710a8c6a63729_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5be35c79e1ecb14dae6e5d23e84ce327bdb2ca2b4349bf8aaa2ba035cc3c5f2 = $this->env->getExtension("native_profiler");
        $__internal_a5be35c79e1ecb14dae6e5d23e84ce327bdb2ca2b4349bf8aaa2ba035cc3c5f2->enter($__internal_a5be35c79e1ecb14dae6e5d23e84ce327bdb2ca2b4349bf8aaa2ba035cc3c5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cert sn";
        
        $__internal_a5be35c79e1ecb14dae6e5d23e84ce327bdb2ca2b4349bf8aaa2ba035cc3c5f2->leave($__internal_a5be35c79e1ecb14dae6e5d23e84ce327bdb2ca2b4349bf8aaa2ba035cc3c5f2_prof);

    }

    // line 148
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b6749bab1a7249fd9acf753a5506ed3fb241e920ae6cd2515e5c8fb96eb4927 = $this->env->getExtension("native_profiler");
        $__internal_1b6749bab1a7249fd9acf753a5506ed3fb241e920ae6cd2515e5c8fb96eb4927->enter($__internal_1b6749bab1a7249fd9acf753a5506ed3fb241e920ae6cd2515e5c8fb96eb4927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 149
        echo "\t\t          \t\t";
        
        $__internal_1b6749bab1a7249fd9acf753a5506ed3fb241e920ae6cd2515e5c8fb96eb4927->leave($__internal_1b6749bab1a7249fd9acf753a5506ed3fb241e920ae6cd2515e5c8fb96eb4927_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::interfaceAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 149,  252 => 148,  240 => 8,  229 => 161,  225 => 160,  213 => 150,  211 => 148,  194 => 134,  188 => 131,  182 => 128,  168 => 117,  152 => 104,  119 => 74,  100 => 58,  81 => 42,  63 => 27,  45 => 12,  41 => 11,  37 => 10,  32 => 8,  24 => 2,);
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
/*                                             <strong>{{ app.user.username }}</strong>*/
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
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu alert-dropdown">*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-default">Alert Incident</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>*/
/*                         </li>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">Voir Tous</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ app.user.username }} <b class="caret"></b></a>*/
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
/*                     <li class="active">*/
/*                         <a href="{{ path('admin_users') }}"><i class="fa fa-fw fa-dashboard"></i> Gestion-Comptes</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('admin_users') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Gestion-Annonces</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('admin_users') }}" type="hidden"><i class="fa fa-fw fa-dashboard"></i> Gestion-Alertes</a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/*             <div class="container-fluid">*/
/* */
/*                 <!-- Page Heading -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                     	{% block fos_user_content %}*/
/* 		          		{% endblock fos_user_content %}*/
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
/* 	</body>*/
/* </html>*/
/* */
