<?php

/* WebProfilerBundle:Profiler:layout.html.twig */
class __TwigTemplate_43cb654cb41178c572aaa829da26b6d6f32cabaf5122384c05a90613746428fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_067b0671e541b517447ba02492641ce51828c01de63b68d34dee592a28f7bf76 = $this->env->getExtension("native_profiler");
        $__internal_067b0671e541b517447ba02492641ce51828c01de63b68d34dee592a28f7bf76->enter($__internal_067b0671e541b517447ba02492641ce51828c01de63b68d34dee592a28f7bf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067b0671e541b517447ba02492641ce51828c01de63b68d34dee592a28f7bf76->leave($__internal_067b0671e541b517447ba02492641ce51828c01de63b68d34dee592a28f7bf76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d5bfccf692b47b24b09f207036e32cad98d3f3bec0b9e5a739379349afb4cfc = $this->env->getExtension("native_profiler");
        $__internal_8d5bfccf692b47b24b09f207036e32cad98d3f3bec0b9e5a739379349afb4cfc->enter($__internal_8d5bfccf692b47b24b09f207036e32cad98d3f3bec0b9e5a739379349afb4cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "position" => "normal")));
        echo "

    <div id=\"content\">
        ";
        // line 8
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 8)->display(array());
        // line 9
        echo "
        <div id=\"main\">

            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    ";
        // line 14
        if ((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile"))) {
            // line 15
            echo "                        <div id=\"resume\">
                            <a id=\"resume-view-all\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("_profiler_search", array("limit" => 10));
            echo "\">View last 10</a>
                            <strong>Profile for:</strong>
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "
                            ";
            // line 19
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 20
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\" id=\"resume-url\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 22
                echo "                                <span id=\"resume-url\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</span>
                            ";
            }
            // line 24
            echo "                            <span class=\"date\">
                                <em>by ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</em> at <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</em>
                            </span>
                        </div>
                    ";
        }
        // line 29
        echo "
                    <div id=\"collector-content\">
                        ";
        // line 31
        $this->loadTemplate("@WebProfiler/Profiler/base_js.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 31)->display($context);
        // line 32
        echo "                        ";
        $this->displayBlock('panel', $context, $blocks);
        // line 33
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 36
        if (array_key_exists("templates", $context)) {
            // line 37
            echo "                        <ul id=\"menu-profiler\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 39
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 40
                echo "                                ";
                if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) != "")) {
                    // line 41
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    if (($context["name"] == (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"));
                    echo "</a>
                                    </li>
                                ";
                }
                // line 45
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            <li class=\"minimize\">
                                <a href=\"javascript:void(0);\" title=\"Minimize toolbar\" onclick=\"return toggleMenuPanels();\">
                                    <span class=\"label\">
                                        <span class=\"icon\"><svg id=\"minimizePanelIcon\" width=\"30\" height=\"33\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 30 33\" enable-background=\"new 0 0 30 33\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M15 5C8.4 5 3 10.4 3 17c0 6.6 5.4 12 12 12s12-5.4 12-12C27 10.4 21.6 5 15 5z M19.1 21.5l-1.8 1.8L10.9 17 l6.3-6.3l1.8 1.8L14.6 17L19.1 21.5z\"/></svg></span>
                                        <strong>Minimize</strong>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    ";
        }
        // line 56
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 57
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "WebProfilerBundle:Profiler:layout.html.twig", 57)->display(array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))));
        // line 58
        echo "                </div>
            </div>
        </div>
    </div>

    <script>//<![CDATA[

        function toggleMenuPanels(state, doSave) {
            var menu = document.getElementById('navigation'), savedState = Sfjs.getPreference('menu/displayState'),
                displayState, elem, className;

            if (null === savedState) {
                savedState = 'block';
            }

            displayState = state || ('block' === savedState ? 'none' : 'block');

            if ('undefined' === typeof doSave) {
                doSave = true;
            }

            document.getElementById('searchBar').style.display = displayState;
            document.getElementById('adminBar').style.display = displayState;

            if ('block' === displayState) {
                Sfjs.removeClass(menu, 'collapsed-menu');
                Sfjs.removeClass(menu.parentNode.parentNode, 'collapsed-menu-parents');
            } else {
                Sfjs.addClass(menu, 'collapsed-menu');
                Sfjs.addClass(menu.parentNode.parentNode, 'collapsed-menu-parents');
            }

            if (doSave) {
                Sfjs.setPreference('menu/displayState', displayState);
            }

            try {
                canvasAutoUpdateOnThresholdChange(null);
            } catch (err) {

            }

            return false;
        }

        window.setTimeout(function() {
            if (null === document.getElementById('menu-profiler')) {
                return;
            }

            var menuItems = document.getElementById('menu-profiler').getElementsByTagName('LI'),
                elem, value, child, displayState = Sfjs.getPreference('menu/displayState');

            if (displayState == 'none') {
                toggleMenuPanels('none', false);
            }

            for (elem in menuItems) {
                if (typeof(menuItems[elem].children) !== 'undefined' &&
                    menuItems[elem].children.length > 0) {
                    child = menuItems[elem].children[0];

                    if ('' === child.getAttribute('title') ||
                        null === child.getAttribute('title')) {
                        value = child.text.replace(/^\\s+/g, '').split('\\n')[0].replace(/\\s+\$/g, '');
                        child.setAttribute('title', value);
                    }
                }
            }
        }, 25);

    //]]></script>
";
        
        $__internal_8d5bfccf692b47b24b09f207036e32cad98d3f3bec0b9e5a739379349afb4cfc->leave($__internal_8d5bfccf692b47b24b09f207036e32cad98d3f3bec0b9e5a739379349afb4cfc_prof);

    }

    // line 32
    public function block_panel($context, array $blocks = array())
    {
        $__internal_549e61068af99eff8fb165b6cb8bf749ef073e965405344c495e56555670f66f = $this->env->getExtension("native_profiler");
        $__internal_549e61068af99eff8fb165b6cb8bf749ef073e965405344c495e56555670f66f->enter($__internal_549e61068af99eff8fb165b6cb8bf749ef073e965405344c495e56555670f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_549e61068af99eff8fb165b6cb8bf749ef073e965405344c495e56555670f66f->leave($__internal_549e61068af99eff8fb165b6cb8bf749ef073e965405344c495e56555670f66f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 32,  173 => 58,  171 => 57,  166 => 56,  154 => 46,  148 => 45,  140 => 42,  132 => 41,  129 => 40,  124 => 39,  120 => 38,  117 => 37,  115 => 36,  110 => 33,  107 => 32,  105 => 31,  101 => 29,  92 => 25,  89 => 24,  83 => 22,  75 => 20,  73 => 19,  69 => 18,  64 => 16,  61 => 15,  59 => 14,  52 => 9,  50 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {{ render(path('_wdt', { 'token': token, 'position': 'normal' })) }}*/
/* */
/*     <div id="content">*/
/*         {% include '@WebProfiler/Profiler/header.html.twig' only %}*/
/* */
/*         <div id="main">*/
/* */
/*             <div class="clear-fix">*/
/*                 <div id="collector-wrapper">*/
/*                     {% if profile %}*/
/*                         <div id="resume">*/
/*                             <a id="resume-view-all" href="{{ path('_profiler_search', {limit: 10}) }}">View last 10</a>*/
/*                             <strong>Profile for:</strong>*/
/*                             {{ profile.method|upper }}*/
/*                             {% if profile.method|upper in ['GET', 'HEAD'] %}*/
/*                                 <a href="{{ profile.url }}" id="resume-url">{{ profile.url }}</a>*/
/*                             {% else %}*/
/*                                 <span id="resume-url">{{ profile.url }}</span>*/
/*                             {% endif %}*/
/*                             <span class="date">*/
/*                                 <em>by {{ profile.ip }}</em> at <em>{{ profile.time|date('r') }}</em>*/
/*                             </span>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                     <div id="collector-content">*/
/*                         {% include '@WebProfiler/Profiler/base_js.html.twig' %}*/
/*                         {% block panel '' %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="navigation">*/
/*                     {% if templates is defined %}*/
/*                         <ul id="menu-profiler">*/
/*                             {% for name, template in templates %}*/
/*                                 {% set menu %}{{ template.renderBlock('menu', { 'collector': profile.getcollector(name)}) }}{% endset %}*/
/*                                 {% if menu != '' %}*/
/*                                     <li class="{{ name }}{% if name == panel %} selected{% endif %}">*/
/*                                         <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">{{ menu|raw }}</a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             <li class="minimize">*/
/*                                 <a href="javascript:void(0);" title="Minimize toolbar" onclick="return toggleMenuPanels();">*/
/*                                     <span class="label">*/
/*                                         <span class="icon"><svg id="minimizePanelIcon" width="30" height="33" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 30 33" enable-background="new 0 0 30 33" xml:space="preserve"><path fill="#3F3F3F" d="M15 5C8.4 5 3 10.4 3 17c0 6.6 5.4 12 12 12s12-5.4 12-12C27 10.4 21.6 5 15 5z M19.1 21.5l-1.8 1.8L10.9 17 l6.3-6.3l1.8 1.8L14.6 17L19.1 21.5z"/></svg></span>*/
/*                                         <strong>Minimize</strong>*/
/*                                     </span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                     {{ render(path('_profiler_search_bar')) }}*/
/*                     {% include '@WebProfiler/Profiler/admin.html.twig' with { 'token': token } only %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>//<![CDATA[*/
/* */
/*         function toggleMenuPanels(state, doSave) {*/
/*             var menu = document.getElementById('navigation'), savedState = Sfjs.getPreference('menu/displayState'),*/
/*                 displayState, elem, className;*/
/* */
/*             if (null === savedState) {*/
/*                 savedState = 'block';*/
/*             }*/
/* */
/*             displayState = state || ('block' === savedState ? 'none' : 'block');*/
/* */
/*             if ('undefined' === typeof doSave) {*/
/*                 doSave = true;*/
/*             }*/
/* */
/*             document.getElementById('searchBar').style.display = displayState;*/
/*             document.getElementById('adminBar').style.display = displayState;*/
/* */
/*             if ('block' === displayState) {*/
/*                 Sfjs.removeClass(menu, 'collapsed-menu');*/
/*                 Sfjs.removeClass(menu.parentNode.parentNode, 'collapsed-menu-parents');*/
/*             } else {*/
/*                 Sfjs.addClass(menu, 'collapsed-menu');*/
/*                 Sfjs.addClass(menu.parentNode.parentNode, 'collapsed-menu-parents');*/
/*             }*/
/* */
/*             if (doSave) {*/
/*                 Sfjs.setPreference('menu/displayState', displayState);*/
/*             }*/
/* */
/*             try {*/
/*                 canvasAutoUpdateOnThresholdChange(null);*/
/*             } catch (err) {*/
/* */
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         window.setTimeout(function() {*/
/*             if (null === document.getElementById('menu-profiler')) {*/
/*                 return;*/
/*             }*/
/* */
/*             var menuItems = document.getElementById('menu-profiler').getElementsByTagName('LI'),*/
/*                 elem, value, child, displayState = Sfjs.getPreference('menu/displayState');*/
/* */
/*             if (displayState == 'none') {*/
/*                 toggleMenuPanels('none', false);*/
/*             }*/
/* */
/*             for (elem in menuItems) {*/
/*                 if (typeof(menuItems[elem].children) !== 'undefined' &&*/
/*                     menuItems[elem].children.length > 0) {*/
/*                     child = menuItems[elem].children[0];*/
/* */
/*                     if ('' === child.getAttribute('title') ||*/
/*                         null === child.getAttribute('title')) {*/
/*                         value = child.text.replace(/^\s+/g, '').split('\n')[0].replace(/\s+$/g, '');*/
/*                         child.setAttribute('title', value);*/
/*                     }*/
/*                 }*/
/*             }*/
/*         }, 25);*/
/* */
/*     //]]></script>*/
/* {% endblock %}*/
/* */
