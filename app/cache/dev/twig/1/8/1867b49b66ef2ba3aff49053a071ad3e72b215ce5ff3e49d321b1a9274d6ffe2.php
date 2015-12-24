<?php

/* CertIncidentBundle:Incident:listerIncident.html.twig */
class __TwigTemplate_60679c8e0a439d82f55c29731aae87f32ba24655c2e89bde49e927990f298331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutiAdmin.html.twig", "CertIncidentBundle:Incident:listerIncident.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutiAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_858dc33a4ffe439666c1697c0a3e92bd76ccc24aba0e85d8b84a2ee46a7140ac = $this->env->getExtension("native_profiler");
        $__internal_858dc33a4ffe439666c1697c0a3e92bd76ccc24aba0e85d8b84a2ee46a7140ac->enter($__internal_858dc33a4ffe439666c1697c0a3e92bd76ccc24aba0e85d8b84a2ee46a7140ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CertIncidentBundle:Incident:listerIncident.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_858dc33a4ffe439666c1697c0a3e92bd76ccc24aba0e85d8b84a2ee46a7140ac->leave($__internal_858dc33a4ffe439666c1697c0a3e92bd76ccc24aba0e85d8b84a2ee46a7140ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3361f5275d6109c8ea893c375a782b212021c95ee71e13fd2d3ef156b3ebe352 = $this->env->getExtension("native_profiler");
        $__internal_3361f5275d6109c8ea893c375a782b212021c95ee71e13fd2d3ef156b3ebe352->enter($__internal_3361f5275d6109c8ea893c375a782b212021c95ee71e13fd2d3ef156b3ebe352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
\tListe Incident
";
        
        $__internal_3361f5275d6109c8ea893c375a782b212021c95ee71e13fd2d3ef156b3ebe352->leave($__internal_3361f5275d6109c8ea893c375a782b212021c95ee71e13fd2d3ef156b3ebe352_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9932c54d734641565f9df559e11e48254238e55e68083fd8e4d7590ff7447a09 = $this->env->getExtension("native_profiler");
        $__internal_9932c54d734641565f9df559e11e48254238e55e68083fd8e4d7590ff7447a09->enter($__internal_9932c54d734641565f9df559e11e48254238e55e68083fd8e4d7590ff7447a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <center><h3>Liste des incidents enregistrés</h3></center>
    <hr>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\" id=\"utilisateurs\">
            <thead>
                <tr>
                    <th>Id </th>
                    <th>Nom </th>
                    <th>Catégorie </th>
                    <th>Date </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_incident"]) ? $context["liste_incident"] : $this->getContext($context, "liste_incident")));
        foreach ($context['_seq'] as $context["_key"] => $context["incident"]) {
            // line 23
            echo "
                <tr>
                    <td><a href=\"#\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "type", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["incident"], "categorie", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["incident"], "dateDeclaration", array()), "d/m/y"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"#\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-2x fa-eye\"></i>voir</a>
                        <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-2x fa-edit\"></i>traiter</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incident'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>
    </div>
    
";
        
        $__internal_9932c54d734641565f9df559e11e48254238e55e68083fd8e4d7590ff7447a09->leave($__internal_9932c54d734641565f9df559e11e48254238e55e68083fd8e4d7590ff7447a09_prof);

    }

    public function getTemplateName()
    {
        return "CertIncidentBundle:Incident:listerIncident.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 23,  71 => 22,  55 => 8,  49 => 7,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layoutiAdmin.html.twig' %}*/
/* */
/* {% block title %} */
/* 	Liste Incident*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <center><h3>Liste des incidents enregistrés</h3></center>*/
/*     <hr>*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-striped" id="utilisateurs">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id </th>*/
/*                     <th>Nom </th>*/
/*                     <th>Catégorie </th>*/
/*                     <th>Date </th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for incident in liste_incident %}*/
/* */
/*                 <tr>*/
/*                     <td><a href="#">{{ incident.id }}</a></td>*/
/*                     <td>{{ incident.type }}</td>*/
/*                     <td>{{ incident.categorie }}</td>*/
/*                     <td>{{ incident.dateDeclaration|date('d/m/y') }}</td>*/
/*                     <td>*/
/*                         <a href="#" class="btn btn-sm btn-success"><i class="fa fa-2x fa-eye"></i>voir</a>*/
/*                         <a href="#" class="btn btn-sm btn-info"><i class="fa fa-2x fa-edit"></i>traiter</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
