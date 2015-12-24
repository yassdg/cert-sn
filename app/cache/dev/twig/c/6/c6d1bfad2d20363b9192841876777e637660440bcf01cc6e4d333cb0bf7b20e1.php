<?php

/* CertIncidentBundle::layouti.html.twig */
class __TwigTemplate_ccc8df1eac731e63f4e4591eab675b44779a86c4601f4ff5aff67e4608e030a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layouti.html.twig", "CertIncidentBundle::layouti.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'certincident_body' => array($this, 'block_certincident_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layouti.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b7c1a95b278ef35505208bee15f06b0bdbd1b4257457dd512a320c8b2e5e373 = $this->env->getExtension("native_profiler");
        $__internal_3b7c1a95b278ef35505208bee15f06b0bdbd1b4257457dd512a320c8b2e5e373->enter($__internal_3b7c1a95b278ef35505208bee15f06b0bdbd1b4257457dd512a320c8b2e5e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle::layouti.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7c1a95b278ef35505208bee15f06b0bdbd1b4257457dd512a320c8b2e5e373->leave($__internal_3b7c1a95b278ef35505208bee15f06b0bdbd1b4257457dd512a320c8b2e5e373_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c2ad8fb794e91e089289733348ccaa077aa71f305b7c5cbf1e890f5a55370d2 = $this->env->getExtension("native_profiler");
        $__internal_5c2ad8fb794e91e089289733348ccaa077aa71f305b7c5cbf1e890f5a55370d2->enter($__internal_5c2ad8fb794e91e089289733348ccaa077aa71f305b7c5cbf1e890f5a55370d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tIncident - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c2ad8fb794e91e089289733348ccaa077aa71f305b7c5cbf1e890f5a55370d2->leave($__internal_5c2ad8fb794e91e089289733348ccaa077aa71f305b7c5cbf1e890f5a55370d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_322bfd44f903dff5e06c2152437753021ca9045e31254110422d7312a7cedf97 = $this->env->getExtension("native_profiler");
        $__internal_322bfd44f903dff5e06c2152437753021ca9045e31254110422d7312a7cedf97->enter($__internal_322bfd44f903dff5e06c2152437753021ca9045e31254110422d7312a7cedf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        // line 11
        echo "
\t";
        // line 13
        echo "\t";
        $this->displayBlock('certincident_body', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_322bfd44f903dff5e06c2152437753021ca9045e31254110422d7312a7cedf97->leave($__internal_322bfd44f903dff5e06c2152437753021ca9045e31254110422d7312a7cedf97_prof);

    }

    // line 13
    public function block_certincident_body($context, array $blocks = array())
    {
        $__internal_3a1c7ff0709cffb2dc16947e8a4b1856269806524782bf1e4bd087f88aaf0041 = $this->env->getExtension("native_profiler");
        $__internal_3a1c7ff0709cffb2dc16947e8a4b1856269806524782bf1e4bd087f88aaf0041->enter($__internal_3a1c7ff0709cffb2dc16947e8a4b1856269806524782bf1e4bd087f88aaf0041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "certincident_body"));

        // line 14
        echo "\t\t
\t";
        
        $__internal_3a1c7ff0709cffb2dc16947e8a4b1856269806524782bf1e4bd087f88aaf0041->leave($__internal_3a1c7ff0709cffb2dc16947e8a4b1856269806524782bf1e4bd087f88aaf0041_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle::layouti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  74 => 13,  66 => 16,  63 => 13,  60 => 11,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# c'est le template du bundle Incident qui herite du template principale du site CERT sn#}*/
/* */
/* {% extends "::layouti.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Incident - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# definition de sous titre commun a toutes les pages du bundle, par exemple #}*/
/* */
/* 	{# definition de nouveau block que les vues du blog vont remplir #}*/
/* 	{% block certincident_body %}*/
/* 		*/
/* 	{% endblock %}*/
/* */
/* {% endblock %}*/
/* 	*/
/* */
/* */
