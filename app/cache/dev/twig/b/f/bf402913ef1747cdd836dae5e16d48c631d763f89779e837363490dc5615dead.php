<?php

/* CertIncidentBundle:Incident:index.html.twig */
class __TwigTemplate_fc29d92988344f513b7e12fe19f5f4b5cb3f7bd56760bb05e0f5dc29ee82c085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CertIncidentBundle::layouti.html.twig", "CertIncidentBundle:Incident:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'certincident_body' => array($this, 'block_certincident_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CertIncidentBundle::layouti.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d11790aa8c9665eb30f5576f008418abc504c26fd8a4c09c6208abd03cbf164 = $this->env->getExtension("native_profiler");
        $__internal_8d11790aa8c9665eb30f5576f008418abc504c26fd8a4c09c6208abd03cbf164->enter($__internal_8d11790aa8c9665eb30f5576f008418abc504c26fd8a4c09c6208abd03cbf164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Incident:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d11790aa8c9665eb30f5576f008418abc504c26fd8a4c09c6208abd03cbf164->leave($__internal_8d11790aa8c9665eb30f5576f008418abc504c26fd8a4c09c6208abd03cbf164_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d27ce6f0c4c5cc5e3ab47148ac73da36d8daac82aa6fe66d840d370d8f2bbd5 = $this->env->getExtension("native_profiler");
        $__internal_6d27ce6f0c4c5cc5e3ab47148ac73da36d8daac82aa6fe66d840d370d8f2bbd5->enter($__internal_6d27ce6f0c4c5cc5e3ab47148ac73da36d8daac82aa6fe66d840d370d8f2bbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
\tAccueil - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_6d27ce6f0c4c5cc5e3ab47148ac73da36d8daac82aa6fe66d840d370d8f2bbd5->leave($__internal_6d27ce6f0c4c5cc5e3ab47148ac73da36d8daac82aa6fe66d840d370d8f2bbd5_prof);

    }

    // line 9
    public function block_certincident_body($context, array $blocks = array())
    {
        $__internal_76e7070f48cd9d64d69a54c721aecfd21596f41350dcb9f0615f0c92e5d26908 = $this->env->getExtension("native_profiler");
        $__internal_76e7070f48cd9d64d69a54c721aecfd21596f41350dcb9f0615f0c92e5d26908->enter($__internal_76e7070f48cd9d64d69a54c721aecfd21596f41350dcb9f0615f0c92e5d26908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "certincident_body"));

        // line 10
        echo "
<link  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/glyphicons-halflings.png"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Carousel
    ================================================== -->
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      </ol>
      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
          <img class=\"first-slide\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/slide1.png"), "html", null, true);
        echo "\" alt=\"First slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Conférence sur la cybercriminalité.</h1>
              <p id=\"slide1\" style=\"color: blue;\">Note: If you're viewing this page via a <code>file://</code> URL, the Face à la montée de la cybercriminalité et de la cybersécurité, la Police nationale essaie de trouver les moyens technologiques adéquats pour contrer ces armes des délinquants 3.0. En attendant, elle investit dans la coopération internationale pour essayer de minimiser les menaces.</p>
              <p><a class=\"btn btn-lg btn-primary\" href=\"\" role=\"button\">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img class=\"second-slide\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/logo1.png"), "html", null, true);
        echo "\" alt=\"Second slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Another example headline.</h1>
              <p id=\"slide2\" style=\"color: blue;\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <img class=\"third-slide\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/logo1.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>One more for good measure.</h1>
              <p id=\"slide3\" style=\"color: blue;\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Précédent</span>
      </a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Suivant</span>
      </a>
    </div><!-- /.carousel -->

<!--Bienvenue sur le site web CERT-SN qui opte a offrir un Internet plus suur et plus resistant pour tous les senegalais en repondant a des incidents majeurs, analyse des menaces et l'echange d'information en matiere de cybersecurite crittique avec des partenaires de confiance du monde entier <div  id=\"cert_image\" class=\"col-lg-12\">
            <div id=\"\">
                <span>  <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("cert_incident_declarer");
        echo "\" class=\"btn btn-primary\">Signaler un Incident</a> </span>
            </div> 
        </div>. -->
\t<div id=\"wrapper\" class=\"row\" >
                <span>  <a id=\"signalerIncident\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("cert_incident_declarer");
        echo "\" class=\"btn btn-primary\">Signaler un Incident</a> </span>
           
    </div>
    <div id=\"contenuPage\">
        <div class=\"row\">
                <div class=\"col-lg-6 col-md-6\" id=\"vulnerabilitePlace\">
            <div class=\"panel panel-danger\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title glyphicon glyphicon-alert\">Vuln&eacute;rabilit&eacute;s Rencentes</h3>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 82
        echo "                    <ul>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_vulnerabilite"]) ? $context["liste_vulnerabilite"] : $this->getContext($context, "liste_vulnerabilite")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["vul"]) {
            // line 84
            echo "                            ";
            if (($this->getAttribute($context["loop"], "index", array()) < 5)) {
                // line 85
                echo "                            <li class=\"glyphicon glyphicon-chevron-right\">
                                ";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["vul"], "titre", array()), "html", null, true);
                echo "
                                <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cert_incident_voirVulnerabilite", array("id" => $this->getAttribute($context["vul"], "id", array()))), "html", null, true);
                echo "\">Detail</a>
                                <br/>
                            </li>
                            ";
            }
            // line 91
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vul'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </ul>
                    <a class=\"btn btn-primary\" id=\"boutonVul\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("cert_incident_ListingVulnerabilite");
        echo "\">voir plus &raquo;</a>
                </div>
            </div>
        </div>
        <!-- /.col-sm-6 -->

        <div class=\"col-lg-6 col-md-6\" id=\"alertePlace\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title glyphicon glyphicon-info-sign\">Alertes de s&eacute;curit&eacute; </h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 106
        echo "                    <ul>
                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_alertes"]) ? $context["liste_alertes"] : $this->getContext($context, "liste_alertes")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 108
            echo "                            ";
            if (($this->getAttribute($context["loop"], "index", array()) < 6)) {
                // line 109
                echo "                            <li class=\"glyphicon glyphicon-chevron-right\">
                                ";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "titre", array()), "html", null, true);
                echo "
                                <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cert_incident_voirAlerte", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
                echo "\">Detail</a><br/>
                            </li><br/>
                            ";
            }
            // line 114
            echo "                          ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 115
            echo "                            <li>Pas d'alerte pour le moment !!) </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    </ul>
                    <a class=\"btn btn-primary\" id=\"boutonAlerte\" href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("cert_incident_ListeAlerte");
        echo "\">voir plus &raquo;</a>
                </div> 
            </div> 
        </div><!-- /.col-sm-6 -->
        <div class=\"col-lg-6 col-md-6\" id=\"annoncePlace\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading \">
                    <h4 class=\"panel-title glyphicon glyphicon-globe\">Annonces </h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 129
        echo "                    <p>Quatres produits dans le syst&eacute;me nationale de sensibilisation sur la cybers&eacute;curite: elle  offre une vari&eacute;t&eacute;    
                        d'informations pour les utilisateurs possedant une expertise technique vari&eacute;e. Ceux ayant  des interets plus techniques peuvent lire les alertes, l'activit&eacute; en cours , ou les bulletins. les utilsateurs a la recherche de plusieurs pi&eacute;ces d'interet g&eacute;n&eacute;ral peuvent lire les conseils.
                    </p>
                     ";
        // line 133
        echo "                    <ul>
                        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_annonces"]) ? $context["liste_annonces"] : $this->getContext($context, "liste_annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 135
            echo "                            <li class=\"glyphicon glyphicon-chevron-right\">
                                ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "
                                <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cert_incident_voirAnnonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Detail</a><br/>
                            </li>
                          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 140
            echo "                            <li>Pas d'annonces pour le moment !!) </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </ul>
                        <a class=\"btn btn-primary\" href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("cert_incident_ListeAnnonce");
        echo "\">liste complet &raquo;</a>
                </div> 
            </div> 
        </div><!-- /.col-sm-6 -->
        <hr>

        <div class=\"col-lg-6 col-md-6\" id=\"documentPlace\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading \">
                    <h4 class=\"panel-title glyphicon glyphicon-globe\">Document Techniques </h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 156
        echo "                   <p>Des articles de fond qui fournissent des conseils et de synthétiser une variété de sujets en matière de sécurité Internet.
                   Des résumés hebdomadaires des nouvelles vulnérabilités ainsi que des informations de patch lorsque disponibles.
                   Conseils et meilleures pratiques sur les questions de sécurité communes pour le grand public.
                    </p>
                     ";
        // line 161
        echo "                    <ul>
                        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_annonces"]) ? $context["liste_annonces"] : $this->getContext($context, "liste_annonces")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 163
            echo "                            <li class=\"glyphicon glyphicon-chevron-right\">
                                ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "
                                <a href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cert_incident_voirAnnonce", array("id" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\">Detail</a><br/>
                            </li>
                          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 168
            echo "                            <li>Pas d'annonces pour le moment !!) </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                    </ul>
                        <a class=\"btn btn-primary\" href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("cert_incident_ListeAnnonce");
        echo "\">liste complet &raquo;</a>
                </div> 
            </div> 
        </div><!-- /.col-sm-6 -->
    </div>
    <section id=\"contact\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                        <h2 class=\"section-heading\">Nous contacter</h2>
                    </div>
                    <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                        <p>77 278 55 70</p>
                    </div>
                     <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\" wow bounceIn\"></i>
                        <p>| </p>
                    </div>
                     <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-envelope fa-3x wow bounceIn\"></i>
                        <p> dieng.yacine@ugb.edu.sn</p>
                    </div>
                    
                   
                </div>
            </div>
    </section>
     <section id=\"contact\">
            <div class=\"container\">
                <div class=\"row\">
                   <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                        <h2 class=\"section-heading\">Nos partenaire</h2>
                    </div>
                    <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                        <p>  

                        <a href=\"#\"><img class=\"second-slide\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/artp.png"), "html", null, true);
        echo "\" alt=\"Second slide\"></a>

                      </p>
                    </div>
                    <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                        <p>  

                        <a href=\"#\"><img class=\"second-slide\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/artp.png"), "html", null, true);
        echo "\" alt=\"Second slide\"></a>

                      </p>
                    </div>
                    <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                        <p>  

                        <a href=\"#\"><img class=\"second-slide\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/artp.png"), "html", null, true);
        echo "\" alt=\"Second slide\"></a>

                      </p>
                    </div>
                     <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                        <p>  

                        <a href=\"#\"><img class=\"second-slide\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/artp.png"), "html", null, true);
        echo "\" alt=\"Second slide\"></a>

                      </p>
                    </div>
                    <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                        <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                        <p>  

                        <a href=\"#\"><img class=\"second-slide\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/certincident/img/artp.png"), "html", null, true);
        echo "\" alt=\"Second slide\"></a>

                      </p>
                    </div>       
                </div>
            </div>
    </section>
     
    </div>
<!--/contenu principal -->

";
        
        $__internal_76e7070f48cd9d64d69a54c721aecfd21596f41350dcb9f0615f0c92e5d26908->leave($__internal_76e7070f48cd9d64d69a54c721aecfd21596f41350dcb9f0615f0c92e5d26908_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Incident:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 241,  457 => 233,  446 => 225,  435 => 217,  424 => 209,  383 => 171,  380 => 170,  373 => 168,  365 => 165,  361 => 164,  358 => 163,  353 => 162,  350 => 161,  344 => 156,  329 => 143,  326 => 142,  319 => 140,  311 => 137,  307 => 136,  304 => 135,  299 => 134,  296 => 133,  291 => 129,  278 => 118,  275 => 117,  268 => 115,  255 => 114,  249 => 111,  245 => 110,  242 => 109,  239 => 108,  221 => 107,  218 => 106,  203 => 93,  200 => 92,  186 => 91,  179 => 87,  175 => 86,  172 => 85,  169 => 84,  152 => 83,  149 => 82,  135 => 70,  128 => 66,  103 => 44,  90 => 34,  77 => 24,  61 => 11,  58 => 10,  52 => 9,  43 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# template fils / page d'accueil du blog #}*/
/* */
/* {% extends "CertIncidentBundle::layouti.html.twig" %}*/
/* */
/* {% block title %} */
/* 	Accueil - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block certincident_body %}*/
/* */
/* <link  href="{{ asset('bundles/certincident/img/glyphicons-halflings.png') }}" rel="stylesheet">*/
/* */
/*     <!-- Carousel*/
/*     ================================================== -->*/
/*     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*       <!-- Indicators -->*/
/*       <ol class="carousel-indicators">*/
/*         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*         <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*       </ol>*/
/*       <div class="carousel-inner" role="listbox">*/
/*         <div class="item active">*/
/*           <img class="first-slide" src="{{ asset('bundles/certincident/img/slide1.png') }}" alt="First slide">*/
/*           <div class="container">*/
/*             <div class="carousel-caption">*/
/*               <h1>Conférence sur la cybercriminalité.</h1>*/
/*               <p id="slide1" style="color: blue;">Note: If you're viewing this page via a <code>file://</code> URL, the Face à la montée de la cybercriminalité et de la cybersécurité, la Police nationale essaie de trouver les moyens technologiques adéquats pour contrer ces armes des délinquants 3.0. En attendant, elle investit dans la coopération internationale pour essayer de minimiser les menaces.</p>*/
/*               <p><a class="btn btn-lg btn-primary" href="" role="button">Sign up today</a></p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="item">*/
/*           <img class="second-slide" src="{{ asset('bundles/certincident/img/logo1.png') }}" alt="Second slide">*/
/*           <div class="container">*/
/*             <div class="carousel-caption">*/
/*               <h1>Another example headline.</h1>*/
/*               <p id="slide2" style="color: blue;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*               <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="item">*/
/*           <img class="third-slide" src="{{ asset('bundles/certincident/img/logo1.png') }}" alt="Third slide">*/
/*           <div class="container">*/
/*             <div class="carousel-caption">*/
/*               <h1>One more for good measure.</h1>*/
/*               <p id="slide3" style="color: blue;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*               <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*         <span class="sr-only">Précédent</span>*/
/*       </a>*/
/*       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*         <span class="sr-only">Suivant</span>*/
/*       </a>*/
/*     </div><!-- /.carousel -->*/
/* */
/* <!--Bienvenue sur le site web CERT-SN qui opte a offrir un Internet plus suur et plus resistant pour tous les senegalais en repondant a des incidents majeurs, analyse des menaces et l'echange d'information en matiere de cybersecurite crittique avec des partenaires de confiance du monde entier <div  id="cert_image" class="col-lg-12">*/
/*             <div id="">*/
/*                 <span>  <a href="{{ path('cert_incident_declarer') }}" class="btn btn-primary">Signaler un Incident</a> </span>*/
/*             </div> */
/*         </div>. -->*/
/* 	<div id="wrapper" class="row" >*/
/*                 <span>  <a id="signalerIncident" href="{{ path('cert_incident_declarer') }}" class="btn btn-primary">Signaler un Incident</a> </span>*/
/*            */
/*     </div>*/
/*     <div id="contenuPage">*/
/*         <div class="row">*/
/*                 <div class="col-lg-6 col-md-6" id="vulnerabilitePlace">*/
/*             <div class="panel panel-danger">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title glyphicon glyphicon-alert">Vuln&eacute;rabilit&eacute;s Rencentes</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {# affichage des vulnerabilite se trouvant dans la base de donnees #}*/
/*                     <ul>*/
/*                         {% for vul in liste_vulnerabilite  %}*/
/*                             {% if loop.index <5 %}*/
/*                             <li class="glyphicon glyphicon-chevron-right">*/
/*                                 {{ vul.titre }}*/
/*                                 <a href="{{ path('cert_incident_voirVulnerabilite', { 'id': vul.id }) }}">Detail</a>*/
/*                                 <br/>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                     <a class="btn btn-primary" id="boutonVul" href="{{ path('cert_incident_ListingVulnerabilite') }}">voir plus &raquo;</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.col-sm-6 -->*/
/* */
/*         <div class="col-lg-6 col-md-6" id="alertePlace">*/
/*             <div class="panel panel-success">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="panel-title glyphicon glyphicon-info-sign">Alertes de s&eacute;curit&eacute; </h4>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {# affichage des aleres se trouvant dans la base de donnees #}*/
/*                     <ul>*/
/*                         {% for alerte in liste_alertes %}*/
/*                             {% if loop.index <6 %}*/
/*                             <li class="glyphicon glyphicon-chevron-right">*/
/*                                 {{ alerte.titre }}*/
/*                                 <a href="{{ path('cert_incident_voirAlerte', { 'id': alerte.id }) }}">Detail</a><br/>*/
/*                             </li><br/>*/
/*                             {% endif %}*/
/*                           {% else %}*/
/*                             <li>Pas d'alerte pour le moment !!) </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                     <a class="btn btn-primary" id="boutonAlerte" href="{{ path('cert_incident_ListeAlerte') }}">voir plus &raquo;</a>*/
/*                 </div> */
/*             </div> */
/*         </div><!-- /.col-sm-6 -->*/
/*         <div class="col-lg-6 col-md-6" id="annoncePlace">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading ">*/
/*                     <h4 class="panel-title glyphicon glyphicon-globe">Annonces </h4>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {# affichage des aleres se trouvant dans la base de donnees #}*/
/*                     <p>Quatres produits dans le syst&eacute;me nationale de sensibilisation sur la cybers&eacute;curite: elle  offre une vari&eacute;t&eacute;    */
/*                         d'informations pour les utilisateurs possedant une expertise technique vari&eacute;e. Ceux ayant  des interets plus techniques peuvent lire les alertes, l'activit&eacute; en cours , ou les bulletins. les utilsateurs a la recherche de plusieurs pi&eacute;ces d'interet g&eacute;n&eacute;ral peuvent lire les conseils.*/
/*                     </p>*/
/*                      {# affichage des aleres se trouvant dans la base de donnees #}*/
/*                     <ul>*/
/*                         {% for annonce in liste_annonces %}*/
/*                             <li class="glyphicon glyphicon-chevron-right">*/
/*                                 {{ annonce.titre }}*/
/*                                 <a href="{{ path('cert_incident_voirAnnonce', { 'id': annonce.id }) }}">Detail</a><br/>*/
/*                             </li>*/
/*                           {% else %}*/
/*                             <li>Pas d'annonces pour le moment !!) </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                         <a class="btn btn-primary" href="{{ path('cert_incident_ListeAnnonce') }}">liste complet &raquo;</a>*/
/*                 </div> */
/*             </div> */
/*         </div><!-- /.col-sm-6 -->*/
/*         <hr>*/
/* */
/*         <div class="col-lg-6 col-md-6" id="documentPlace">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading ">*/
/*                     <h4 class="panel-title glyphicon glyphicon-globe">Document Techniques </h4>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {# affichage des aleres se trouvant dans la base de donnees #}*/
/*                    <p>Des articles de fond qui fournissent des conseils et de synthétiser une variété de sujets en matière de sécurité Internet.*/
/*                    Des résumés hebdomadaires des nouvelles vulnérabilités ainsi que des informations de patch lorsque disponibles.*/
/*                    Conseils et meilleures pratiques sur les questions de sécurité communes pour le grand public.*/
/*                     </p>*/
/*                      {# affichage des aleres se trouvant dans la base de donnees #}*/
/*                     <ul>*/
/*                         {% for annonce in liste_annonces %}*/
/*                             <li class="glyphicon glyphicon-chevron-right">*/
/*                                 {{ annonce.titre }}*/
/*                                 <a href="{{ path('cert_incident_voirAnnonce', { 'id': annonce.id }) }}">Detail</a><br/>*/
/*                             </li>*/
/*                           {% else %}*/
/*                             <li>Pas d'annonces pour le moment !!) </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                         <a class="btn btn-primary" href="{{ path('cert_incident_ListeAnnonce') }}">liste complet &raquo;</a>*/
/*                 </div> */
/*             </div> */
/*         </div><!-- /.col-sm-6 -->*/
/*     </div>*/
/*     <section id="contact">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                         <h2 class="section-heading">Nous contacter</h2>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                         <p>77 278 55 70</p>*/
/*                     </div>*/
/*                      <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class=" wow bounceIn"></i>*/
/*                         <p>| </p>*/
/*                     </div>*/
/*                      <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-envelope fa-3x wow bounceIn"></i>*/
/*                         <p> dieng.yacine@ugb.edu.sn</p>*/
/*                     </div>*/
/*                     */
/*                    */
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/*      <section id="contact">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                    <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                         <h2 class="section-heading">Nos partenaire</h2>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                         <p>  */
/* */
/*                         <a href="#"><img class="second-slide" src="{{ asset('bundles/certincident/img/artp.png') }}" alt="Second slide"></a>*/
/* */
/*                       </p>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                         <p>  */
/* */
/*                         <a href="#"><img class="second-slide" src="{{ asset('bundles/certincident/img/artp.png') }}" alt="Second slide"></a>*/
/* */
/*                       </p>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                         <p>  */
/* */
/*                         <a href="#"><img class="second-slide" src="{{ asset('bundles/certincident/img/artp.png') }}" alt="Second slide"></a>*/
/* */
/*                       </p>*/
/*                     </div>*/
/*                      <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                         <p>  */
/* */
/*                         <a href="#"><img class="second-slide" src="{{ asset('bundles/certincident/img/artp.png') }}" alt="Second slide"></a>*/
/* */
/*                       </p>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                         <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                         <p>  */
/* */
/*                         <a href="#"><img class="second-slide" src="{{ asset('bundles/certincident/img/artp.png') }}" alt="Second slide"></a>*/
/* */
/*                       </p>*/
/*                     </div>       */
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/*      */
/*     </div>*/
/* <!--/contenu principal -->*/
/* */
/* {% endblock %}*/
