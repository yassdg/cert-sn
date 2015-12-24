<?php

/* CertUserBundle:User:index.html.twig */
class __TwigTemplate_59bebf2d1b95bed56d06d58fa3a270d99a89c5aef02a95be68d086f5f802cf58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutiAdmin.html.twig", "CertUserBundle:User:index.html.twig", 1);
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
        $__internal_a642aba0134f4bcfb012c7392454657e2c66d91e230748cf7955f073a0c950d1 = $this->env->getExtension("native_profiler");
        $__internal_a642aba0134f4bcfb012c7392454657e2c66d91e230748cf7955f073a0c950d1->enter($__internal_a642aba0134f4bcfb012c7392454657e2c66d91e230748cf7955f073a0c950d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a642aba0134f4bcfb012c7392454657e2c66d91e230748cf7955f073a0c950d1->leave($__internal_a642aba0134f4bcfb012c7392454657e2c66d91e230748cf7955f073a0c950d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2b0ac3d4f57e7055ec6ad9bf2318cee79480ac0b384cbaa8beb18abd757f4bc = $this->env->getExtension("native_profiler");
        $__internal_c2b0ac3d4f57e7055ec6ad9bf2318cee79480ac0b384cbaa8beb18abd757f4bc->enter($__internal_c2b0ac3d4f57e7055ec6ad9bf2318cee79480ac0b384cbaa8beb18abd757f4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<center><h3>Liste des comptes utilisateur</h3></center>
    <hr>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\" id=\"utilisateurs\">
            <thead>
                <tr>
                    <th>Id </th>
                    <th>Login </th>
                    <th>email </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "
                <tr>
                    <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_users_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_users_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-2x fa-eye\"></i>voir</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_users_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-2x fa-edit\"></i>&eacute;diter</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_users_new");
        echo "\" class=\"btn btn-primary btn-large\">
        Cr&eacute;er un nouveau compte
    </a>
    </div>
    
    ";
        
        $__internal_c2b0ac3d4f57e7055ec6ad9bf2318cee79480ac0b384cbaa8beb18abd757f4bc->leave($__internal_c2b0ac3d4f57e7055ec6ad9bf2318cee79480ac0b384cbaa8beb18abd757f4bc_prof);

    }

    public function getTemplateName()
    {
        return "CertUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  92 => 29,  82 => 25,  78 => 24,  73 => 22,  69 => 21,  63 => 20,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layoutiAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <center><h3>Liste des comptes utilisateur</h3></center>*/
/*     <hr>*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-striped" id="utilisateurs">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id </th>*/
/*                     <th>Login </th>*/
/*                     <th>email </th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entity in entities %}*/
/* */
/*                 <tr>*/
/*                     <td><a href="{{ path('admin_users_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.username }}</td>*/
/*                     <td>{{ entity.email }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('admin_users_show', { 'id': entity.id }) }}" class="btn btn-sm btn-success"><i class="fa fa-2x fa-eye"></i>voir</a>*/
/*                         <a href="{{ path('admin_users_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-info"><i class="fa fa-2x fa-edit"></i>&eacute;diter</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     <a href="{{ path('admin_users_new') }}" class="btn btn-primary btn-large">*/
/*         Cr&eacute;er un nouveau compte*/
/*     </a>*/
/*     </div>*/
/*     */
/*     {% endblock %}*/
/* */
