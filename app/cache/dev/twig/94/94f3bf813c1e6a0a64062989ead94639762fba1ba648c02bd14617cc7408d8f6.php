<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_0f2837bf022da9249b4a74b558711f6931f3099156dd1106b9995435a85e4714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:results.html.twig", 1);
        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92107cad9148586e3d2147ba181a821039e5a25d4c26770c620db3a84a37810e = $this->env->getExtension("native_profiler");
        $__internal_92107cad9148586e3d2147ba181a821039e5a25d4c26770c620db3a84a37810e->enter($__internal_92107cad9148586e3d2147ba181a821039e5a25d4c26770c620db3a84a37810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92107cad9148586e3d2147ba181a821039e5a25d4c26770c620db3a84a37810e->leave($__internal_92107cad9148586e3d2147ba181a821039e5a25d4c26770c620db3a84a37810e_prof);

    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3b12b95116f3233172f3bdebac0441160cd1b6f5c4d4b83ea333458a8a3d383 = $this->env->getExtension("native_profiler");
        $__internal_a3b12b95116f3233172f3bdebac0441160cd1b6f5c4d4b83ea333458a8a3d383->enter($__internal_a3b12b95116f3233172f3bdebac0441160cd1b6f5c4d4b83ea333458a8a3d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 20
                echo "                    <tr>
                        <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["elements"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "token", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "ip", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "method", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "url", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["elements"], "time", array()), "r"), "html", null, true);
                echo "</td>
                        <td>
                        ";
                // line 27
                if (($this->getAttribute($context["elements"], "status_code", array(), "any", true, true) && $this->getAttribute($context["elements"], "status_code", array()))) {
                    // line 28
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "status_code", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 30
                    echo "                            unknown
                        ";
                }
                // line 32
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 38
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 42
        echo "
";
        
        $__internal_a3b12b95116f3233172f3bdebac0441160cd1b6f5c4d4b83ea333458a8a3d383->leave($__internal_a3b12b95116f3233172f3bdebac0441160cd1b6f5c4d4b83ea333458a8a3d383_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  115 => 38,  110 => 35,  102 => 32,  98 => 30,  92 => 28,  90 => 27,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block panel %}*/
/*     <h2>Search Results</h2>*/
/* */
/*     {% if tokens %}*/
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Token</th>*/
/*                     <th scope="col">IP</th>*/
/*                     <th scope="col">Method</th>*/
/*                     <th scope="col">URL</th>*/
/*                     <th scope="col">Time</th>*/
/*                     <th scope="col">Status</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for elements in tokens %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('_profiler', { 'token': elements.token }) }}">{{ elements.token }}</a></td>*/
/*                         <td>{{ elements.ip }}</td>*/
/*                         <td>{{ elements.method }}</td>*/
/*                         <td>{{ elements.url }}</td>*/
/*                         <td>{{ elements.time|date('r') }}</td>*/
/*                         <td>*/
/*                         {% if elements.status_code is defined and elements.status_code %}*/
/*                             {{ elements.status_code }}*/
/*                         {% else %}*/
/*                             unknown*/
/*                         {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% else %}*/
/*         <p>*/
/*             <em>The query returned no result.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
