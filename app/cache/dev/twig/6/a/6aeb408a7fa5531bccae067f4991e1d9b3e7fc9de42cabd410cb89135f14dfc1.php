<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f4de2ab2cf3123c72393aa6f425179b0aa5e855855159f91f368f9f290c8df58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a123bb7c235a5d11d2247fcb8de9202ed00e5fe6ab080fe09d55fd992cebd2b2 = $this->env->getExtension("native_profiler");
        $__internal_a123bb7c235a5d11d2247fcb8de9202ed00e5fe6ab080fe09d55fd992cebd2b2->enter($__internal_a123bb7c235a5d11d2247fcb8de9202ed00e5fe6ab080fe09d55fd992cebd2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a123bb7c235a5d11d2247fcb8de9202ed00e5fe6ab080fe09d55fd992cebd2b2->leave($__internal_a123bb7c235a5d11d2247fcb8de9202ed00e5fe6ab080fe09d55fd992cebd2b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7d37cd297758dd4506c23e3693a39d9cf9ce7da7e0fbd000e93283284a7d728 = $this->env->getExtension("native_profiler");
        $__internal_d7d37cd297758dd4506c23e3693a39d9cf9ce7da7e0fbd000e93283284a7d728->enter($__internal_d7d37cd297758dd4506c23e3693a39d9cf9ce7da7e0fbd000e93283284a7d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7d37cd297758dd4506c23e3693a39d9cf9ce7da7e0fbd000e93283284a7d728->leave($__internal_d7d37cd297758dd4506c23e3693a39d9cf9ce7da7e0fbd000e93283284a7d728_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c372b86661fb0176fc61b7734a7111fb72ebe376ffd4bd7d6c57ee7b2a4e5cd = $this->env->getExtension("native_profiler");
        $__internal_0c372b86661fb0176fc61b7734a7111fb72ebe376ffd4bd7d6c57ee7b2a4e5cd->enter($__internal_0c372b86661fb0176fc61b7734a7111fb72ebe376ffd4bd7d6c57ee7b2a4e5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c372b86661fb0176fc61b7734a7111fb72ebe376ffd4bd7d6c57ee7b2a4e5cd->leave($__internal_0c372b86661fb0176fc61b7734a7111fb72ebe376ffd4bd7d6c57ee7b2a4e5cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8deba8a79449bc884a81b24c1ea12f8623591b3d30c99322625e52f4f46283c = $this->env->getExtension("native_profiler");
        $__internal_a8deba8a79449bc884a81b24c1ea12f8623591b3d30c99322625e52f4f46283c->enter($__internal_a8deba8a79449bc884a81b24c1ea12f8623591b3d30c99322625e52f4f46283c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a8deba8a79449bc884a81b24c1ea12f8623591b3d30c99322625e52f4f46283c->leave($__internal_a8deba8a79449bc884a81b24c1ea12f8623591b3d30c99322625e52f4f46283c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
