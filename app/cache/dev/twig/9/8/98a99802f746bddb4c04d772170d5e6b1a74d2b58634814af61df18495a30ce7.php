<?php

/* CertIncidentBundle:Vulnerabilite:show.html.twig */
class __TwigTemplate_fdc97d09d8655139aead1f6718b2204f6249117225a0335ec0b402184e47a787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutiAdmin.html.twig", "CertIncidentBundle:Vulnerabilite:show.html.twig", 1);
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
        $__internal_68e11d3701d8da29877af03c6a527c7faad369153958b58698a99eb7575ceda0 = $this->env->getExtension("native_profiler");
        $__internal_68e11d3701d8da29877af03c6a527c7faad369153958b58698a99eb7575ceda0->enter($__internal_68e11d3701d8da29877af03c6a527c7faad369153958b58698a99eb7575ceda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Vulnerabilite:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e11d3701d8da29877af03c6a527c7faad369153958b58698a99eb7575ceda0->leave($__internal_68e11d3701d8da29877af03c6a527c7faad369153958b58698a99eb7575ceda0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7e427628701657d08217cdba78255c012923cb634c00dde9d7d9460c9ee1a20 = $this->env->getExtension("native_profiler");
        $__internal_b7e427628701657d08217cdba78255c012923cb634c00dde9d7d9460c9ee1a20->enter($__internal_b7e427628701657d08217cdba78255c012923cb634c00dde9d7d9460c9ee1a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Vulnerabilite</h1>

   <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Impact</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "impact", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Solution</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "solution", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>
                    <ul>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ref"]) {
            // line 34
            echo "                            <li>";
            echo twig_escape_filter($this->env, $context["ref"], "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </td>
            </tr>
            <tr>
                <th>Source</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "source", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepub</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datePub", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datemodification</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateModification", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_vulnerabilite");
        echo "\" class=\"btn btn-sm btn-info\">
                <i class=\"fa fa-2x fa-menu-left\"></i>Retourner &aacute; la liste
        </a>
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_vulnerabilite_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-2x fa-edit\"></i>Editer</a>
        
        <li>";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
</div>
";
        
        $__internal_b7e427628701657d08217cdba78255c012923cb634c00dde9d7d9460c9ee1a20->leave($__internal_b7e427628701657d08217cdba78255c012923cb634c00dde9d7d9460c9ee1a20_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Vulnerabilite:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  135 => 58,  129 => 55,  120 => 49,  113 => 45,  106 => 41,  99 => 36,  90 => 34,  86 => 33,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layoutiAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Vulnerabilite</h1>*/
/* */
/*    <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ entity.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Impact</th>*/
/*                 <td>{{ entity.impact }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Solution</th>*/
/*                 <td>{{ entity.solution }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Reference</th>*/
/*                 <td>*/
/*                     <ul>*/
/*                         {% for ref in entity.reference %}*/
/*                             <li>{{ ref }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Source</th>*/
/*                 <td>{{ entity.source }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datepub</th>*/
/*                 <td>{{ entity.datePub|date('d/m/Y') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datemodification</th>*/
/*                 <td>{{ entity.dateModification|date('d/m/Y') }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <a href="{{ path('admin_vulnerabilite') }}" class="btn btn-sm btn-info">*/
/*                 <i class="fa fa-2x fa-menu-left"></i>Retourner &aacute; la liste*/
/*         </a>*/
/*         <a href="{{ path('admin_vulnerabilite_edit', { 'id': entity.id }) }}" class="btn btn-sm btn-info"><i class="fa fa-2x fa-edit"></i>Editer</a>*/
/*         */
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
