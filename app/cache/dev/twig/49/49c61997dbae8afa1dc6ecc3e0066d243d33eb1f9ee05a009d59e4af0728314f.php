<?php

/* AppBundle:User:showAllEvents.html.twig */
class __TwigTemplate_0ca961621cdcc619b47b5f8541a804c559c6e5de605a2b08e989e4b30811e327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:showAllEvents.html.twig", 1);
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
        $__internal_69591c95f92de6439a8404cf57176e6bcaea91fe8cd0a5660fda71f5a84833f6 = $this->env->getExtension("native_profiler");
        $__internal_69591c95f92de6439a8404cf57176e6bcaea91fe8cd0a5660fda71f5a84833f6->enter($__internal_69591c95f92de6439a8404cf57176e6bcaea91fe8cd0a5660fda71f5a84833f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:showAllEvents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69591c95f92de6439a8404cf57176e6bcaea91fe8cd0a5660fda71f5a84833f6->leave($__internal_69591c95f92de6439a8404cf57176e6bcaea91fe8cd0a5660fda71f5a84833f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50cdaa68f4fae4e85d49efb1201a06892b70ebbfbc6b5763b3470fb87f36a257 = $this->env->getExtension("native_profiler");
        $__internal_50cdaa68f4fae4e85d49efb1201a06892b70ebbfbc6b5763b3470fb87f36a257->enter($__internal_50cdaa68f4fae4e85d49efb1201a06892b70ebbfbc6b5763b3470fb87f36a257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All events";
        
        $__internal_50cdaa68f4fae4e85d49efb1201a06892b70ebbfbc6b5763b3470fb87f36a257->leave($__internal_50cdaa68f4fae4e85d49efb1201a06892b70ebbfbc6b5763b3470fb87f36a257_prof);

    }

    // line 5
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_46cc3e14b8d20c0d442d167e33d116cb060e5f852c42f9587c053adc1d1c18bc = $this->env->getExtension("native_profiler");
        $__internal_46cc3e14b8d20c0d442d167e33d116cb060e5f852c42f9587c053adc1d1c18bc->enter($__internal_46cc3e14b8d20c0d442d167e33d116cb060e5f852c42f9587c053adc1d1c18bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 6
        echo "    <h1>Welcome to the admin panel</h1>

";
        
        $__internal_46cc3e14b8d20c0d442d167e33d116cb060e5f852c42f9587c053adc1d1c18bc->leave($__internal_46cc3e14b8d20c0d442d167e33d116cb060e5f852c42f9587c053adc1d1c18bc_prof);

    }

    // line 10
    public function block_left($context, array $blocks = array())
    {
        $__internal_074f570b11608553156b6ba6535c22e87ec77c4ea6e9c178864680fd03990354 = $this->env->getExtension("native_profiler");
        $__internal_074f570b11608553156b6ba6535c22e87ec77c4ea6e9c178864680fd03990354->enter($__internal_074f570b11608553156b6ba6535c22e87ec77c4ea6e9c178864680fd03990354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 11
        echo "    <h3>Hello Admin!</h3>
";
        
        $__internal_074f570b11608553156b6ba6535c22e87ec77c4ea6e9c178864680fd03990354->leave($__internal_074f570b11608553156b6ba6535c22e87ec77c4ea6e9c178864680fd03990354_prof);

    }

    // line 13
    public function block_middle($context, array $blocks = array())
    {
        $__internal_603a7c42f88e46f7744c5af3ae97f82e530864d0216fc2bfd609da130cfdd9dc = $this->env->getExtension("native_profiler");
        $__internal_603a7c42f88e46f7744c5af3ae97f82e530864d0216fc2bfd609da130cfdd9dc->enter($__internal_603a7c42f88e46f7744c5af3ae97f82e530864d0216fc2bfd609da130cfdd9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 14
        echo "    <h1>All events:</h1>
    <table class=\"table table-hover\">
        <th class='text-center'>Name</th>
        <th class='text-center'>Description</th>
        <th class='text-center'>Accepted</th>


            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 22
            echo "                <tr>
                    <td><a href=\"/crew/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "accepted", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"btn btn-danger\" href=\"/admin/event/remove/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">Remove</a></td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                <p>No events</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    </table>
";
        
        $__internal_603a7c42f88e46f7744c5af3ae97f82e530864d0216fc2bfd609da130cfdd9dc->leave($__internal_603a7c42f88e46f7744c5af3ae97f82e530864d0216fc2bfd609da130cfdd9dc_prof);

    }

    // line 34
    public function block_right($context, array $blocks = array())
    {
        $__internal_5fde5f2d92f84cf0f810484c97bac09db70bddb32b0107b7301587b87218ddac = $this->env->getExtension("native_profiler");
        $__internal_5fde5f2d92f84cf0f810484c97bac09db70bddb32b0107b7301587b87218ddac->enter($__internal_5fde5f2d92f84cf0f810484c97bac09db70bddb32b0107b7301587b87218ddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 35
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_5fde5f2d92f84cf0f810484c97bac09db70bddb32b0107b7301587b87218ddac->leave($__internal_5fde5f2d92f84cf0f810484c97bac09db70bddb32b0107b7301587b87218ddac_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:showAllEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  140 => 34,  131 => 31,  124 => 29,  116 => 26,  112 => 25,  108 => 24,  102 => 23,  99 => 22,  94 => 21,  85 => 14,  79 => 13,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}All events{% endblock %}*/
/* */
/* {% block jumbotron %}*/
/*     <h1>Welcome to the admin panel</h1>*/
/* */
/* {% endblock %}*/
/* */
/* {% block left %}*/
/*     <h3>Hello Admin!</h3>*/
/* {% endblock %}*/
/* {% block middle %}*/
/*     <h1>All events:</h1>*/
/*     <table class="table table-hover">*/
/*         <th class='text-center'>Name</th>*/
/*         <th class='text-center'>Description</th>*/
/*         <th class='text-center'>Accepted</th>*/
/* */
/* */
/*             {% for event in events %}*/
/*                 <tr>*/
/*                     <td><a href="/crew/{{event.id}}">{{event.name}}</a></td>*/
/*                     <td>{{event.description}}</td>*/
/*                     <td>{{event.accepted}}</td>*/
/*                     <td><a class="btn btn-danger" href="/admin/event/remove/{{event.id}}">Remove</a></td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <p>No events</p>*/
/*             {% endfor %}*/
/* */
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
