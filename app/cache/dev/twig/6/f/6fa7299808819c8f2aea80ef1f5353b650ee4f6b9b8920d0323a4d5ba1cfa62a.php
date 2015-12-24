<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0ed3216172ceaf62649736920998d0d24b36e0e6b14d43a1d9a1894a0c417572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::interfaceAdmin.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::interfaceAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_473b6153d1c22d0ce8ba0a0a8e00de1ad86550b3af2a406ee2df17749da8fe29 = $this->env->getExtension("native_profiler");
        $__internal_473b6153d1c22d0ce8ba0a0a8e00de1ad86550b3af2a406ee2df17749da8fe29->enter($__internal_473b6153d1c22d0ce8ba0a0a8e00de1ad86550b3af2a406ee2df17749da8fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_473b6153d1c22d0ce8ba0a0a8e00de1ad86550b3af2a406ee2df17749da8fe29->leave($__internal_473b6153d1c22d0ce8ba0a0a8e00de1ad86550b3af2a406ee2df17749da8fe29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d040fb4e5b55ce40184006bf3c82351a368ab14b39233d1f4ed59c4cc8b87f7 = $this->env->getExtension("native_profiler");
        $__internal_1d040fb4e5b55ce40184006bf3c82351a368ab14b39233d1f4ed59c4cc8b87f7->enter($__internal_1d040fb4e5b55ce40184006bf3c82351a368ab14b39233d1f4ed59c4cc8b87f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1d040fb4e5b55ce40184006bf3c82351a368ab14b39233d1f4ed59c4cc8b87f7->leave($__internal_1d040fb4e5b55ce40184006bf3c82351a368ab14b39233d1f4ed59c4cc8b87f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::interfaceAdmin.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
