<?php

/* CertIncidentBundle:Alerte:index.html.twig */
class __TwigTemplate_b061f8715775447ab2d0ff0efdfabdb15bff4eaeb6388771f04688a7e6ae861c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutiAdmin.html.twig", "CertIncidentBundle:Alerte:index.html.twig", 1);
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
        $__internal_71d36ea30e4bb8e7455450ef0d682bd20a874a937d6c96d4c4578312f10e9e21 = $this->env->getExtension("native_profiler");
        $__internal_71d36ea30e4bb8e7455450ef0d682bd20a874a937d6c96d4c4578312f10e9e21->enter($__internal_71d36ea30e4bb8e7455450ef0d682bd20a874a937d6c96d4c4578312f10e9e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Alerte:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d36ea30e4bb8e7455450ef0d682bd20a874a937d6c96d4c4578312f10e9e21->leave($__internal_71d36ea30e4bb8e7455450ef0d682bd20a874a937d6c96d4c4578312f10e9e21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_291edd57ec546bc632c1c0716a50a39ff055b58153c70aa2000beacd38295dd5 = $this->env->getExtension("native_profiler");
        $__internal_291edd57ec546bc632c1c0716a50a39ff055b58153c70aa2000beacd38295dd5->enter($__internal_291edd57ec546bc632c1c0716a50a39ff055b58153c70aa2000beacd38295dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<center><h1>Liste des alertes</h1></center>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "                <tr>
                    <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alerte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alerte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\"/><i class=\"fa fa-2x fa-eye\"></i>voir</a>
                            
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_alerte_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\"/><i class=\"fa fa-2x fa-edit\"></i>&eacute;diter</a>    
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>

        <ul>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_alerte_new");
        echo "\" class=\"btn btn-sm btn-default\">
                <i class=\"fa fa-2x fa-edit\"></i>Cr&eacute;er nouvelle alerte
            </a>
        </ul>
    </div>
    ";
        
        $__internal_291edd57ec546bc632c1c0716a50a39ff055b58153c70aa2000beacd38295dd5->leave($__internal_291edd57ec546bc632c1c0716a50a39ff055b58153c70aa2000beacd38295dd5_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Alerte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  86 => 26,  76 => 22,  71 => 20,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layoutiAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <center><h1>Liste des alertes</h1></center>*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Titre</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('admin_alerte_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.titre }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('admin_alerte_show', { 'id': entity.id }) }}" class="btn btn-sm btn-info"/><i class="fa fa-2x fa-eye"></i>voir</a>*/
/*                             */
/*                         <a href="{{ path('admin_alerte_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-success"/><i class="fa fa-2x fa-edit"></i>&eacute;diter</a>    */
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <ul>*/
/*             <a href="{{ path('admin_alerte_new') }}" class="btn btn-sm btn-default">*/
/*                 <i class="fa fa-2x fa-edit"></i>Cr&eacute;er nouvelle alerte*/
/*             </a>*/
/*         </ul>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
