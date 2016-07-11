<?php

/* AppBundle:Crew:index.html.twig */
class __TwigTemplate_51a50dbf91e2cc4008ca7770d9ac38a407e19c96865497dcfbcfb0b5c002dad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Crew:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43f267de0df25e954c97b993b7c12a060e48b78570ed878ce4b01c5ff582f452 = $this->env->getExtension("native_profiler");
        $__internal_43f267de0df25e954c97b993b7c12a060e48b78570ed878ce4b01c5ff582f452->enter($__internal_43f267de0df25e954c97b993b7c12a060e48b78570ed878ce4b01c5ff582f452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Crew:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f267de0df25e954c97b993b7c12a060e48b78570ed878ce4b01c5ff582f452->leave($__internal_43f267de0df25e954c97b993b7c12a060e48b78570ed878ce4b01c5ff582f452_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a33da3c5199de290795d2c99ab2dadd840410c6142a49c792f6d346e910c77b = $this->env->getExtension("native_profiler");
        $__internal_3a33da3c5199de290795d2c99ab2dadd840410c6142a49c792f6d346e910c77b->enter($__internal_3a33da3c5199de290795d2c99ab2dadd840410c6142a49c792f6d346e910c77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All groups";
        
        $__internal_3a33da3c5199de290795d2c99ab2dadd840410c6142a49c792f6d346e910c77b->leave($__internal_3a33da3c5199de290795d2c99ab2dadd840410c6142a49c792f6d346e910c77b_prof);

    }

    // line 5
    public function block_top($context, array $blocks = array())
    {
        $__internal_a30e65861b10cc821f03a19c585e55b5610607ce1964f95f3db17b5c1a3497e5 = $this->env->getExtension("native_profiler");
        $__internal_a30e65861b10cc821f03a19c585e55b5610607ce1964f95f3db17b5c1a3497e5->enter($__internal_a30e65861b10cc821f03a19c585e55b5610607ce1964f95f3db17b5c1a3497e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 6
        echo "    <h1 class=\"text-center\">All groups</h1>
";
        
        $__internal_a30e65861b10cc821f03a19c585e55b5610607ce1964f95f3db17b5c1a3497e5->leave($__internal_a30e65861b10cc821f03a19c585e55b5610607ce1964f95f3db17b5c1a3497e5_prof);

    }

    // line 8
    public function block_middle($context, array $blocks = array())
    {
        $__internal_72dca864694f3ee39161201c22f2f057debc21ce1370f55b0fdef893707f3722 = $this->env->getExtension("native_profiler");
        $__internal_72dca864694f3ee39161201c22f2f057debc21ce1370f55b0fdef893707f3722->enter($__internal_72dca864694f3ee39161201c22f2f057debc21ce1370f55b0fdef893707f3722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 9
        echo "<table class=\"table table-hover text-center\">
        <thead>
            <tr>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Description</th>
                <th class=\"text-center\">Join/Leave</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a class=\"link\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crew_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 23
            if (!twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute($context["entity"], "users", array()))) {
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_crew_addusertocrew", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"Join\"><span class=\"glyphicon glyphicon-ok accept\"></span></a>
                    ";
            } else {
                // line 26
                echo "                        <a href=\"/crew/removeUser/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"Leave\"><span class=\"glyphicon glyphicon-remove remove\"></span></a>
                    ";
            }
            // line 28
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <script>
\$(document).ready(function(){
    \$('[data-toggle=\"tooltip\"]').tooltip();
});
</script>
        </tbody>
    </table>
        <p class=\"text-center\">
            <a class=\"btn btn-custom btn-block\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("crew_new");
        echo "\">
                Add
            </a>
        </p>        
    ";
        
        $__internal_72dca864694f3ee39161201c22f2f057debc21ce1370f55b0fdef893707f3722->leave($__internal_72dca864694f3ee39161201c22f2f057debc21ce1370f55b0fdef893707f3722_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Crew:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  119 => 31,  111 => 28,  105 => 26,  99 => 24,  97 => 23,  92 => 21,  86 => 20,  83 => 19,  79 => 18,  68 => 9,  62 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}All groups{% endblock %}   */
/* */
/* {% block top %}*/
/*     <h1 class="text-center">All groups</h1>*/
/* {% endblock %}    */
/* {% block middle -%}*/
/*     <table class="table table-hover text-center">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th class="text-center">Name</th>*/
/*                 <th class="text-center">Description</th>*/
/*                 <th class="text-center">Join/Leave</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a class="link" href="{{ path('crew_show', { 'id': entity.id }) }}">{{ entity.name }}</a></td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>*/
/*                     {% if user not in entity.users %}*/
/*                         <a href="{{ path('app_crew_addusertocrew', { 'id': entity.id }) }}" data-toggle="tooltip" title="Join"><span class="glyphicon glyphicon-ok accept"></span></a>*/
/*                     {% else %}*/
/*                         <a href="/crew/removeUser/{{entity.id}}" data-toggle="tooltip" title="Leave"><span class="glyphicon glyphicon-remove remove"></span></a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         <script>*/
/* $(document).ready(function(){*/
/*     $('[data-toggle="tooltip"]').tooltip();*/
/* });*/
/* </script>*/
/*         </tbody>*/
/*     </table>*/
/*         <p class="text-center">*/
/*             <a class="btn btn-custom btn-block" href="{{ path('crew_new') }}">*/
/*                 Add*/
/*             </a>*/
/*         </p>        */
/*     {% endblock %}*/
/* */
