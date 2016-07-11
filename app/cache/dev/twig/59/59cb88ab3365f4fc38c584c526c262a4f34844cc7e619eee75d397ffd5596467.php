<?php

/* AppBundle:User:showAllCrews.html.twig */
class __TwigTemplate_ca1b9d6d48b16f2e2ee51f685368381a379e7ebf7f59fb9ba4b88e19aac994bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:showAllCrews.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'left' => array($this, 'block_left'),
            'middle' => array($this, 'block_middle'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feccd7a525f8df7930fb0010d75b00d6a0ceadca5e60a4f8bfd97e063e10b67c = $this->env->getExtension("native_profiler");
        $__internal_feccd7a525f8df7930fb0010d75b00d6a0ceadca5e60a4f8bfd97e063e10b67c->enter($__internal_feccd7a525f8df7930fb0010d75b00d6a0ceadca5e60a4f8bfd97e063e10b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:showAllCrews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feccd7a525f8df7930fb0010d75b00d6a0ceadca5e60a4f8bfd97e063e10b67c->leave($__internal_feccd7a525f8df7930fb0010d75b00d6a0ceadca5e60a4f8bfd97e063e10b67c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd3eb950c3c14255fef9bd932355fcb7ad8a1a6105c1af1444edd0198d8f2344 = $this->env->getExtension("native_profiler");
        $__internal_cd3eb950c3c14255fef9bd932355fcb7ad8a1a6105c1af1444edd0198d8f2344->enter($__internal_cd3eb950c3c14255fef9bd932355fcb7ad8a1a6105c1af1444edd0198d8f2344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All groups";
        
        $__internal_cd3eb950c3c14255fef9bd932355fcb7ad8a1a6105c1af1444edd0198d8f2344->leave($__internal_cd3eb950c3c14255fef9bd932355fcb7ad8a1a6105c1af1444edd0198d8f2344_prof);

    }

    // line 5
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_6d0262f6a7a24a51d022c2fdad0c0b1d91060ce21fe999266e47672a9b9b2287 = $this->env->getExtension("native_profiler");
        $__internal_6d0262f6a7a24a51d022c2fdad0c0b1d91060ce21fe999266e47672a9b9b2287->enter($__internal_6d0262f6a7a24a51d022c2fdad0c0b1d91060ce21fe999266e47672a9b9b2287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 6
        echo "    <h1>Welcome to admin panel</h1>

";
        
        $__internal_6d0262f6a7a24a51d022c2fdad0c0b1d91060ce21fe999266e47672a9b9b2287->leave($__internal_6d0262f6a7a24a51d022c2fdad0c0b1d91060ce21fe999266e47672a9b9b2287_prof);

    }

    // line 10
    public function block_left($context, array $blocks = array())
    {
        $__internal_5b7ef483a6b93bcb76c956451aeeb92d5658884507ca3efb6465b2721fb27e7b = $this->env->getExtension("native_profiler");
        $__internal_5b7ef483a6b93bcb76c956451aeeb92d5658884507ca3efb6465b2721fb27e7b->enter($__internal_5b7ef483a6b93bcb76c956451aeeb92d5658884507ca3efb6465b2721fb27e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 11
        echo "    <h3>Hello Admin!</h3>
";
        
        $__internal_5b7ef483a6b93bcb76c956451aeeb92d5658884507ca3efb6465b2721fb27e7b->leave($__internal_5b7ef483a6b93bcb76c956451aeeb92d5658884507ca3efb6465b2721fb27e7b_prof);

    }

    // line 13
    public function block_middle($context, array $blocks = array())
    {
        $__internal_d6cd444e8345344164d6d848a0bb19a15f700b98ec55760bb1898b8dd9849c27 = $this->env->getExtension("native_profiler");
        $__internal_d6cd444e8345344164d6d848a0bb19a15f700b98ec55760bb1898b8dd9849c27->enter($__internal_d6cd444e8345344164d6d848a0bb19a15f700b98ec55760bb1898b8dd9849c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 14
        echo "    <h1>All groups:</h1>
    <table class=\"table table-hover\">
        <th class='text-center'>Name</th>
        <th class='text-center'>Description</th>
        <th class='text-center'>Accepted</th>


        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crews"]) ? $context["crews"] : $this->getContext($context, "crews")));
        foreach ($context['_seq'] as $context["_key"] => $context["crew"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"/crew/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "accepted", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn btn-danger\" href=\"/admin/crew/remove/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\">Remove</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crew'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
";
        
        $__internal_d6cd444e8345344164d6d848a0bb19a15f700b98ec55760bb1898b8dd9849c27->leave($__internal_d6cd444e8345344164d6d848a0bb19a15f700b98ec55760bb1898b8dd9849c27_prof);

    }

    // line 31
    public function block_right($context, array $blocks = array())
    {
        $__internal_4edeb6da329ede6ccf06bf8a85b73454198be81bff46890c79d37653b72afd77 = $this->env->getExtension("native_profiler");
        $__internal_4edeb6da329ede6ccf06bf8a85b73454198be81bff46890c79d37653b72afd77->enter($__internal_4edeb6da329ede6ccf06bf8a85b73454198be81bff46890c79d37653b72afd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 32
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_4edeb6da329ede6ccf06bf8a85b73454198be81bff46890c79d37653b72afd77->leave($__internal_4edeb6da329ede6ccf06bf8a85b73454198be81bff46890c79d37653b72afd77_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:showAllCrews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 32,  132 => 31,  124 => 29,  115 => 26,  111 => 25,  107 => 24,  101 => 23,  98 => 22,  94 => 21,  85 => 14,  79 => 13,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}All groups{% endblock %}*/
/* */
/* {% block jumbotron %}*/
/*     <h1>Welcome to admin panel</h1>*/
/* */
/* {% endblock %}*/
/* */
/* {% block left %}*/
/*     <h3>Hello Admin!</h3>*/
/* {% endblock %}*/
/* {% block middle %}*/
/*     <h1>All groups:</h1>*/
/*     <table class="table table-hover">*/
/*         <th class='text-center'>Name</th>*/
/*         <th class='text-center'>Description</th>*/
/*         <th class='text-center'>Accepted</th>*/
/* */
/* */
/*         {% for crew in crews %}*/
/*             <tr>*/
/*                 <td><a href="/crew/{{crew.id}}">{{crew.name}}</a></td>*/
/*                 <td>{{crew.description}}</td>*/
/*                 <td>{{crew.accepted}}</td>*/
/*                 <td><a class="btn btn-danger" href="/admin/crew/remove/{{crew.id}}">Remove</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
/* {% block right %}*/
/*     <div class="btn-group-vertical">*/
/*         <a class="btn btn-success" href="/index">User page</a>*/
/*         <a class="btn btn-success" href="/admin/index">Main</a>*/
/*         <a class="btn btn-success" href="/admin/crews">All active groups</a>*/
/*         <a class="btn btn-success" href="/admin/events">All active events</a>*/
/*         <a class="btn btn-success" href="/admin/users">All users</a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
