<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2230a03d82a59dfe6b7691e2c9f353af03f6d699fd99f1239258272cec98ccfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017a1d39de0fbfb49abcba0e424cc6041202ede8db238f52e1d053ac1994a226 = $this->env->getExtension("native_profiler");
        $__internal_017a1d39de0fbfb49abcba0e424cc6041202ede8db238f52e1d053ac1994a226->enter($__internal_017a1d39de0fbfb49abcba0e424cc6041202ede8db238f52e1d053ac1994a226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nom", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("prenom", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telephone", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</p>
    
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-fw fa-edit\"></i> Modifier votre mot de passe</a>
                    
</div>
";
        
        $__internal_017a1d39de0fbfb49abcba0e424cc6041202ede8db238f52e1d053ac1994a226->leave($__internal_017a1d39de0fbfb49abcba0e424cc6041202ede8db238f52e1d053ac1994a226_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  50 => 8,  44 => 7,  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'email'|trans }}: {{ user.email }}</p>*/
/*     <p>{{ 'nom'|trans }}: {{ user.nom }}</p>*/
/*     <p>{{ 'prenom'|trans }}: {{ user.prenom }}</p>*/
/*     <p>{{ 'telephone'|trans }}: {{ user.telephone }}</p>*/
/*     */
/*         <a href="{{ path('fos_user_change_password') }}" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i> Modifier votre mot de passe</a>*/
/*                     */
/* </div>*/
/* */
