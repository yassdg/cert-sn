<?php

/* CertIncidentBundle:Vulnerabilite:index.html.twig */
class __TwigTemplate_eeaaf4c03e1d8c66ff6029bd6922ca152551a4074dd545c5f6c439398b88fa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutiAdmin.html.twig", "CertIncidentBundle:Vulnerabilite:index.html.twig", 1);
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
        $__internal_1ed56fcab6033e32d05ee53226e245bdd0b99a3a1bb25acd9aed35366625725c = $this->env->getExtension("native_profiler");
        $__internal_1ed56fcab6033e32d05ee53226e245bdd0b99a3a1bb25acd9aed35366625725c->enter($__internal_1ed56fcab6033e32d05ee53226e245bdd0b99a3a1bb25acd9aed35366625725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Vulnerabilite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed56fcab6033e32d05ee53226e245bdd0b99a3a1bb25acd9aed35366625725c->leave($__internal_1ed56fcab6033e32d05ee53226e245bdd0b99a3a1bb25acd9aed35366625725c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc9d24b21ff9ea64c7abc29b90b9acf3ea6214c27775d10824ab90f5e2f0059 = $this->env->getExtension("native_profiler");
        $__internal_1dc9d24b21ff9ea64c7abc29b90b9acf3ea6214c27775d10824ab90f5e2f0059->enter($__internal_1dc9d24b21ff9ea64c7abc29b90b9acf3ea6214c27775d10824ab90f5e2f0059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Liste des Vulnerabilite</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Date</th>
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
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_vulnerabilite_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datePub", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_vulnerabilite_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-2x fa-eye\"></i>voir</a>
                    
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_vulnerabilite_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-sm btn-info\">
                <i class=\"fa fa-2x fa-edit\"></i>editer</a>
                   
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_vulnerabilite_new");
        echo "\" class=\"btn btn-sm btn-info\">
                    <i class=\"fa fa-2x fa-new\"></i>Cr&eacute;er Vulnerabilite
                </a>
    </ul>
    </div>
    ";
        
        $__internal_1dc9d24b21ff9ea64c7abc29b90b9acf3ea6214c27775d10824ab90f5e2f0059->leave($__internal_1dc9d24b21ff9ea64c7abc29b90b9acf3ea6214c27775d10824ab90f5e2f0059_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Vulnerabilite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  96 => 33,  84 => 27,  78 => 24,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layoutiAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Liste des Vulnerabilite</h1>*/
/* */
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Date</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_vulnerabilite_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.titre }}</td>*/
/*                 <td>{{ entity.datePub|date('d/m/Y') }}</td>*/
/*                 <td>*/
/*                 */
/*                         <a href="{{ path('admin_vulnerabilite_show', { 'id': entity.id }) }}"class="btn btn-sm btn-success">*/
/*                 <i class="fa fa-2x fa-eye"></i>voir</a>*/
/*                     */
/*                         <a href="{{ path('admin_vulnerabilite_edit', { 'id': entity.id }) }}"class="btn btn-sm btn-info">*/
/*                 <i class="fa fa-2x fa-edit"></i>editer</a>*/
/*                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <a href="{{ path('admin_vulnerabilite_new') }}" class="btn btn-sm btn-info">*/
/*                     <i class="fa fa-2x fa-new"></i>Cr&eacute;er Vulnerabilite*/
/*                 </a>*/
/*     </ul>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
