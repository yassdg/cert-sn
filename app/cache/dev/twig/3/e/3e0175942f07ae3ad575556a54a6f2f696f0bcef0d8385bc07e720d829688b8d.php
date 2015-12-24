<?php

/* CertIncidentBundle:Vulnerabilite:new.html.twig */
class __TwigTemplate_d0b3bf56fa0e13e919a7a030ee087f4fe564e1fa2cdfecd7474a7e241ca49bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutiAdmin.html.twig", "CertIncidentBundle:Vulnerabilite:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutiAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af8b45f0cfc2f6aca69aaac55b6160eb4013c800b55713a67fc408a7c2b39a8c = $this->env->getExtension("native_profiler");
        $__internal_af8b45f0cfc2f6aca69aaac55b6160eb4013c800b55713a67fc408a7c2b39a8c->enter($__internal_af8b45f0cfc2f6aca69aaac55b6160eb4013c800b55713a67fc408a7c2b39a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Vulnerabilite:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8b45f0cfc2f6aca69aaac55b6160eb4013c800b55713a67fc408a7c2b39a8c->leave($__internal_af8b45f0cfc2f6aca69aaac55b6160eb4013c800b55713a67fc408a7c2b39a8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52821352444b0299ddd09ab91ad648ad96211ef8c9b71080a8fe3bc918ab7498 = $this->env->getExtension("native_profiler");
        $__internal_52821352444b0299ddd09ab91ad648ad96211ef8c9b71080a8fe3bc918ab7498->enter($__internal_52821352444b0299ddd09ab91ad648ad96211ef8c9b71080a8fe3bc918ab7498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Vulnerabilite creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_vulnerabilite");
        echo "\" class=\"btn btn-sm btn-info\">
            <i class=\"fa fa-2x fa-menu-left\"></i>Retourner &aacute; la liste</a>
        </a>
    </li>
</ul>
";
        
        $__internal_52821352444b0299ddd09ab91ad648ad96211ef8c9b71080a8fe3bc918ab7498->leave($__internal_52821352444b0299ddd09ab91ad648ad96211ef8c9b71080a8fe3bc918ab7498_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Vulnerabilite:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layoutiAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Vulnerabilite creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('admin_vulnerabilite') }}" class="btn btn-sm btn-info">*/
/*             <i class="fa fa-2x fa-menu-left"></i>Retourner &aacute; la liste</a>*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
