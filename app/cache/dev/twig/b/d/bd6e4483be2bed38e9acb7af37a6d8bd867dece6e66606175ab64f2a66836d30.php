<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_687c1551c4f189d9290eb6df4b0704fbea02220c2f12afa32a50dc667d78ec0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ab19e894dd38d32b3d7ab4dc985c1599b0aa95200fc6fae12c82783ccd795be = $this->env->getExtension("native_profiler");
        $__internal_0ab19e894dd38d32b3d7ab4dc985c1599b0aa95200fc6fae12c82783ccd795be->enter($__internal_0ab19e894dd38d32b3d7ab4dc985c1599b0aa95200fc6fae12c82783ccd795be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ab19e894dd38d32b3d7ab4dc985c1599b0aa95200fc6fae12c82783ccd795be->leave($__internal_0ab19e894dd38d32b3d7ab4dc985c1599b0aa95200fc6fae12c82783ccd795be_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff784bd8d28a5baa2bc8e108351f82f6cadedcea71320a97d750239de1877284 = $this->env->getExtension("native_profiler");
        $__internal_ff784bd8d28a5baa2bc8e108351f82f6cadedcea71320a97d750239de1877284->enter($__internal_ff784bd8d28a5baa2bc8e108351f82f6cadedcea71320a97d750239de1877284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"input-group\">
        \t<span class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\"></i> </span>
        \t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placehhorlder=\"votre Login\" />
        </div>

        <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"input-group\">
        \t<span class=\"input-group-addon\"><i class=\"fa fa-fw fa-key\"></i> </span>
        \t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placehhorlder=\"votre mot de passe\"/>
        </div>
        <div class=\"checkbox\">
        \t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
        <input class=\"btn btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn\" />
    </form>
";
        
        $__internal_ff784bd8d28a5baa2bc8e108351f82f6cadedcea71320a97d750239de1877284->leave($__internal_ff784bd8d28a5baa2bc8e108351f82f6cadedcea71320a97d750239de1877284_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  83 => 26,  73 => 19,  67 => 16,  61 => 13,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*         <div class="input-group">*/
/*         	<span class="input-group-addon"><i class="fa fa-fw fa-user"></i> </span>*/
/*         	<input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" placehhorlder="votre Login" />*/
/*         </div>*/
/* */
/*         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*         <div class="input-group">*/
/*         	<span class="input-group-addon"><i class="fa fa-fw fa-key"></i> </span>*/
/*         	<input class="form-control" type="password" id="password" name="_password" required="required" placehhorlder="votre mot de passe"/>*/
/*         </div>*/
/*         <div class="checkbox">*/
/*         	<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*         </div>*/
/*         <input class="btn btn-block" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn" />*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */
