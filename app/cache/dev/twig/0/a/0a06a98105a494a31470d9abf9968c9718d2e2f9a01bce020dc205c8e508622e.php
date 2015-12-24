<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5fac0ff1fc668e1766d275a5bd26242f9a7f463585b88a838244345b1436f9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("CertIncidentBundle::layouti.html.twig", "FOSUserBundle::layout.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CertIncidentBundle::layouti.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f713fc42fde206f98cd839ef7f6ab60a2de839c42bac980f9543f0b6cf4cd914 = $this->env->getExtension("native_profiler");
        $__internal_f713fc42fde206f98cd839ef7f6ab60a2de839c42bac980f9543f0b6cf4cd914->enter($__internal_f713fc42fde206f98cd839ef7f6ab60a2de839c42bac980f9543f0b6cf4cd914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f713fc42fde206f98cd839ef7f6ab60a2de839c42bac980f9543f0b6cf4cd914->leave($__internal_f713fc42fde206f98cd839ef7f6ab60a2de839c42bac980f9543f0b6cf4cd914_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1323c461d76fcece22c891eb1ef199a63bacea30e6bc86bba8c85c75c6c34d4e = $this->env->getExtension("native_profiler");
        $__internal_1323c461d76fcece22c891eb1ef199a63bacea30e6bc86bba8c85c75c6c34d4e->enter($__internal_1323c461d76fcece22c891eb1ef199a63bacea30e6bc86bba8c85c75c6c34d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    ";
        // line 10
        echo "    <div class=\"well\">
        ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "
            <b>Connecté en tant que ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </b>
                    -
            <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn\">Déconnexion</a>
        ";
        } else {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn\">Connexion</a>
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 21
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "    </div>

";
        
        $__internal_1323c461d76fcece22c891eb1ef199a63bacea30e6bc86bba8c85c75c6c34d4e->leave($__internal_1323c461d76fcece22c891eb1ef199a63bacea30e6bc86bba8c85c75c6c34d4e_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca3800905f1242b74a709518b45a36f20928d9b76fcff32cfaa281980bb63a9f = $this->env->getExtension("native_profiler");
        $__internal_ca3800905f1242b74a709518b45a36f20928d9b76fcff32cfaa281980bb63a9f->enter($__internal_ca3800905f1242b74a709518b45a36f20928d9b76fcff32cfaa281980bb63a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "        
        ";
        
        $__internal_ca3800905f1242b74a709518b45a36f20928d9b76fcff32cfaa281980bb63a9f->leave($__internal_ca3800905f1242b74a709518b45a36f20928d9b76fcff32cfaa281980bb63a9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 28,  97 => 31,  95 => 28,  92 => 27,  89 => 25,  80 => 22,  75 => 21,  71 => 20,  68 => 19,  62 => 17,  57 => 15,  52 => 13,  49 => 12,  47 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 5,);
    }
}
/* */
/* {# src/Cert/UserBundle/Ressources/views/layout.html.twig #}*/
/* */
/* {# on etend notre layout #}*/
/* {% extends "CertIncidentBundle::layouti.html.twig" %}*/
/* */
/* {% block body %}*/
/*     */
/*     {# on affiche les messages flash que definissent les controleurs du bundle #}*/
/*     <div class="well">*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/*             <b>Connecté en tant que {{ app.user.username }} </b>*/
/*                     -*/
/*             <a href="{{ path('fos_user_security_logout') }}" class="btn">Déconnexion</a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}" class="btn">Connexion</a>*/
/*         {% endif %}*/
/* */
/*         {% for key, message in app.session.flashbag.all() %}*/
/*             <div class="alert alert-{{ key }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {# on definit ce block, dans lequel vont venir s'inserer les autres vues du bundle #}*/
/* */
/*         {% block fos_user_content %}*/
/*         */
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
