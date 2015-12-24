<?php

/* CertIncidentBundle:Incident:vulnerabilite.html.twig */
class __TwigTemplate_6b925b281b7fef638ab3b5eb1a0bd4761b0407b0cce048b0e79fd2e7fad0a57c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CertIncidentBundle::layouti.html.twig", "CertIncidentBundle:Incident:vulnerabilite.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'certincident_body' => array($this, 'block_certincident_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CertIncidentBundle::layouti.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47863a778c2ebba271f48c50d0d5cc847d4cbf7c25ab7930e0ae03f7f41ac01e = $this->env->getExtension("native_profiler");
        $__internal_47863a778c2ebba271f48c50d0d5cc847d4cbf7c25ab7930e0ae03f7f41ac01e->enter($__internal_47863a778c2ebba271f48c50d0d5cc847d4cbf7c25ab7930e0ae03f7f41ac01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Incident:vulnerabilite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47863a778c2ebba271f48c50d0d5cc847d4cbf7c25ab7930e0ae03f7f41ac01e->leave($__internal_47863a778c2ebba271f48c50d0d5cc847d4cbf7c25ab7930e0ae03f7f41ac01e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50525a9fed5675891ccbbb2eae49dcee2d70e65f19024506def3aef7e8f84ccf = $this->env->getExtension("native_profiler");
        $__internal_50525a9fed5675891ccbbb2eae49dcee2d70e65f19024506def3aef7e8f84ccf->enter($__internal_50525a9fed5675891ccbbb2eae49dcee2d70e65f19024506def3aef7e8f84ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
\tIncident - ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_50525a9fed5675891ccbbb2eae49dcee2d70e65f19024506def3aef7e8f84ccf->leave($__internal_50525a9fed5675891ccbbb2eae49dcee2d70e65f19024506def3aef7e8f84ccf_prof);

    }

    // line 7
    public function block_certincident_body($context, array $blocks = array())
    {
        $__internal_c863764f1c8d247a2322f432765f0a733f912108bca40b86ef5ef3e935a54a83 = $this->env->getExtension("native_profiler");
        $__internal_c863764f1c8d247a2322f432765f0a733f912108bca40b86ef5ef3e935a54a83->enter($__internal_c863764f1c8d247a2322f432765f0a733f912108bca40b86ef5ef3e935a54a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "certincident_body"));

        // line 8
        echo "
\t<div class=\"well\">
\t\t<h2><center>Liste des Vuln&eacute;rabilit&eacute;s</center> </h2>
\t</div>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["vulnerabilite"]) {
            // line 13
            echo "\t\t<table class=\"table table-bordered table-hover table-striped\" id=\"tab_logic\">
\t        <tbody ";
            // line 14
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo " class=\"color\"";
            }
            echo ">
\t        \t<tr>
\t                <th class=\"bg-primary\">";
            // line 16
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "Vulnerabilite.id");
            echo "</th>
\t                <td><h4>";
            // line 17
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "Vulnerabilite.id");
            echo "</h4></td>
\t            </tr>
\t            <tr>
\t                <th ";
            // line 20
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "Alerte.Titre"), "method")) {
                echo "class=\"sorted\"";
            }
            echo ">
\t                \t";
            // line 21
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titre", "Vulnerabilite.titre");
            echo "
\t                </th>
\t                <td><h4>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["vulnerabilite"], "titre", array()), "html", null, true);
            echo "</h4></td>
\t            </tr>

\t            <tr>
\t                <th class=\"text-center\">Sources</th>
\t                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["vulnerabilite"], "source", array()), "html", null, true);
            echo "</td>
\t            </tr>
\t            <tr>
\t                <th class=\"text-center\">Date</th>
\t                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vulnerabilite"], "datepub", array()), "d/m/y"), "html", null, true);
            echo "</td>
\t            </tr>
\t        </tbody>
    \t</table>
    \t<hr>
    \t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vulnerabilite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    <div class=\"navigation\">
\t\t";
        // line 39
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</div>
";
        
        $__internal_c863764f1c8d247a2322f432765f0a733f912108bca40b86ef5ef3e935a54a83->leave($__internal_c863764f1c8d247a2322f432765f0a733f912108bca40b86ef5ef3e935a54a83_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Incident:vulnerabilite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  147 => 38,  127 => 32,  120 => 28,  112 => 23,  107 => 21,  101 => 20,  95 => 17,  91 => 16,  84 => 14,  81 => 13,  64 => 12,  58 => 8,  52 => 7,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CertIncidentBundle::layouti.html.twig" %}*/
/* */
/* {% block title %} */
/* 	Incident - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block certincident_body %}*/
/* */
/* 	<div class="well">*/
/* 		<h2><center>Liste des Vuln&eacute;rabilit&eacute;s</center> </h2>*/
/* 	</div>*/
/* 		{% for vulnerabilite in pagination %}*/
/* 		<table class="table table-bordered table-hover table-striped" id="tab_logic">*/
/* 	        <tbody {% if loop.index is odd %} class="color"{% endif %}>*/
/* 	        	<tr>*/
/* 	                <th class="bg-primary">{{ knp_pagination_sortable(pagination, 'Id', 'Vulnerabilite.id') }}</th>*/
/* 	                <td><h4>{{ knp_pagination_sortable(pagination, 'Id', 'Vulnerabilite.id') }}</h4></td>*/
/* 	            </tr>*/
/* 	            <tr>*/
/* 	                <th {% if pagination.isSorted('Alerte.Titre')%}class="sorted"{% endif %}>*/
/* 	                	{{ knp_pagination_sortable(pagination, 'Titre', 'Vulnerabilite.titre') }}*/
/* 	                </th>*/
/* 	                <td><h4>{{ vulnerabilite.titre }}</h4></td>*/
/* 	            </tr>*/
/* */
/* 	            <tr>*/
/* 	                <th class="text-center">Sources</th>*/
/* 	                <td>{{ vulnerabilite.source }}</td>*/
/* 	            </tr>*/
/* 	            <tr>*/
/* 	                <th class="text-center">Date</th>*/
/* 	                <td>{{ vulnerabilite.datepub|date('d/m/y') }}</td>*/
/* 	            </tr>*/
/* 	        </tbody>*/
/*     	</table>*/
/*     	<hr>*/
/*     	{% endfor %}*/
/*     <div class="navigation">*/
/* 		{{ knp_pagination_render(pagination) }}*/
/* 	</div>*/
/* {% endblock %}*/
