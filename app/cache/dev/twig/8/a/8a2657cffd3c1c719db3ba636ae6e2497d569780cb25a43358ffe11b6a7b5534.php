<?php

/* CertIncidentBundle:Incident:listeAlerte.html.twig */
class __TwigTemplate_6ad478aa28e25a79b8d3328506bcd6977a69bd6b0781deb372ae2d910b4b5b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CertIncidentBundle::layouti.html.twig", "CertIncidentBundle:Incident:listeAlerte.html.twig", 1);
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
        $__internal_96744d810074a173c7d46562c056517bdb570329bfa2ef06a65eacc3db421095 = $this->env->getExtension("native_profiler");
        $__internal_96744d810074a173c7d46562c056517bdb570329bfa2ef06a65eacc3db421095->enter($__internal_96744d810074a173c7d46562c056517bdb570329bfa2ef06a65eacc3db421095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Incident:listeAlerte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96744d810074a173c7d46562c056517bdb570329bfa2ef06a65eacc3db421095->leave($__internal_96744d810074a173c7d46562c056517bdb570329bfa2ef06a65eacc3db421095_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_effe4aab9b990eb857a6f5a7248f6b6e3b8319a83362491d6d8800398117e399 = $this->env->getExtension("native_profiler");
        $__internal_effe4aab9b990eb857a6f5a7248f6b6e3b8319a83362491d6d8800398117e399->enter($__internal_effe4aab9b990eb857a6f5a7248f6b6e3b8319a83362491d6d8800398117e399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
\tIncident - ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_effe4aab9b990eb857a6f5a7248f6b6e3b8319a83362491d6d8800398117e399->leave($__internal_effe4aab9b990eb857a6f5a7248f6b6e3b8319a83362491d6d8800398117e399_prof);

    }

    // line 7
    public function block_certincident_body($context, array $blocks = array())
    {
        $__internal_c4b6c10555a5063c65b9dfc0bb250280a36aa857b26da7506f47a173c24d5ac3 = $this->env->getExtension("native_profiler");
        $__internal_c4b6c10555a5063c65b9dfc0bb250280a36aa857b26da7506f47a173c24d5ac3->enter($__internal_c4b6c10555a5063c65b9dfc0bb250280a36aa857b26da7506f47a173c24d5ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "certincident_body"));

        // line 8
        echo "\t<div class=\"well\">
\t\t<h3>Liste des alertes de securites </h3>
\t\t<div class=\"count\">
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
\t\t</div>
\t</div>
\t<hr>
\t<table>
\t\t<tr>
\t\t\t<th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "Alerte.id");
        echo "</th>
\t\t\t<th ";
        // line 18
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "Alerte.Titre"), "method")) {
            echo "class=\"sorted\"";
        }
        echo ">
\t\t\t\t ";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titre", "Alerte.titre");
        echo "
\t\t\t</th>
\t\t</tr>

\t\t";
        // line 24
        echo "\t\t";
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
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 25
            echo "\t\t\t<tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo " class=\"color\"";
            }
            echo ">
\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "systemeAffecte", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</table>
\t<div class=\"navigation\">
\t\t";
        // line 32
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t</div>
\t
\t\t
";
        
        $__internal_c4b6c10555a5063c65b9dfc0bb250280a36aa857b26da7506f47a173c24d5ac3->leave($__internal_c4b6c10555a5063c65b9dfc0bb250280a36aa857b26da7506f47a173c24d5ac3_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Incident:listeAlerte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  135 => 30,  118 => 27,  114 => 26,  107 => 25,  89 => 24,  82 => 19,  76 => 18,  72 => 17,  63 => 11,  58 => 8,  52 => 7,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CertIncidentBundle::layouti.html.twig" %}*/
/* */
/* {% block title %} */
/* 	Incident - {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block certincident_body %}*/
/* 	<div class="well">*/
/* 		<h3>Liste des alertes de securites </h3>*/
/* 		<div class="count">*/
/* 			{{ pagination.getTotalItemCount }}*/
/* 		</div>*/
/* 	</div>*/
/* 	<hr>*/
/* 	<table>*/
/* 		<tr>*/
/* 			<th>{{ knp_pagination_sortable(pagination, 'Id', 'Alerte.id') }}</th>*/
/* 			<th {% if pagination.isSorted('Alerte.Titre')%}class="sorted"{% endif %}>*/
/* 				 {{ knp_pagination_sortable(pagination, 'Titre', 'Alerte.titre') }}*/
/* 			</th>*/
/* 		</tr>*/
/* */
/* 		{# contenu du tableau de donnees #}*/
/* 		{% for alerte in pagination %}*/
/* 			<tr {% if loop.index is odd %} class="color"{% endif %}>*/
/* 				<td>{{ alerte.id }}</td>*/
/* 				<td>{{ alerte.systemeAffecte }}</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 	</table>*/
/* 	<div class="navigation">*/
/* 		{{ knp_pagination_render(pagination) }}*/
/* 	</div>*/
/* 	*/
/* 		*/
/* {% endblock %}*/
/* */
/* */
