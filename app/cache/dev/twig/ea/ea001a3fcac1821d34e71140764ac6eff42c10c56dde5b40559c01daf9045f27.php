<?php

/* AppBundle:User:showAllUsers.html.twig */
class __TwigTemplate_6a98ea4950782e7323286ef7f8aa639610c4f6f38158f79c74b95de4a50deeec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:showAllUsers.html.twig", 1);
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
        $__internal_9eb4896e1ee1dde9507518a54eff3873f7b3ebfd6ab6eeabdd1d5cc259787b7c = $this->env->getExtension("native_profiler");
        $__internal_9eb4896e1ee1dde9507518a54eff3873f7b3ebfd6ab6eeabdd1d5cc259787b7c->enter($__internal_9eb4896e1ee1dde9507518a54eff3873f7b3ebfd6ab6eeabdd1d5cc259787b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:showAllUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eb4896e1ee1dde9507518a54eff3873f7b3ebfd6ab6eeabdd1d5cc259787b7c->leave($__internal_9eb4896e1ee1dde9507518a54eff3873f7b3ebfd6ab6eeabdd1d5cc259787b7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04af39b8c0fba0149dab50a7d9d684c62a0f02a49d958d04878ce2a686c10aad = $this->env->getExtension("native_profiler");
        $__internal_04af39b8c0fba0149dab50a7d9d684c62a0f02a49d958d04878ce2a686c10aad->enter($__internal_04af39b8c0fba0149dab50a7d9d684c62a0f02a49d958d04878ce2a686c10aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All users";
        
        $__internal_04af39b8c0fba0149dab50a7d9d684c62a0f02a49d958d04878ce2a686c10aad->leave($__internal_04af39b8c0fba0149dab50a7d9d684c62a0f02a49d958d04878ce2a686c10aad_prof);

    }

    // line 5
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_07998dd8d5dfb572773ec76360c988ccc48eb41d72081534318af017a47f2093 = $this->env->getExtension("native_profiler");
        $__internal_07998dd8d5dfb572773ec76360c988ccc48eb41d72081534318af017a47f2093->enter($__internal_07998dd8d5dfb572773ec76360c988ccc48eb41d72081534318af017a47f2093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 6
        echo "<h1>Welcome to the admin panel</h1>

";
        
        $__internal_07998dd8d5dfb572773ec76360c988ccc48eb41d72081534318af017a47f2093->leave($__internal_07998dd8d5dfb572773ec76360c988ccc48eb41d72081534318af017a47f2093_prof);

    }

    // line 10
    public function block_left($context, array $blocks = array())
    {
        $__internal_6f337ef7d4635374f290d4446146acb6c5ab688042ebd9545ecee47caec0e568 = $this->env->getExtension("native_profiler");
        $__internal_6f337ef7d4635374f290d4446146acb6c5ab688042ebd9545ecee47caec0e568->enter($__internal_6f337ef7d4635374f290d4446146acb6c5ab688042ebd9545ecee47caec0e568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 11
        echo "    <h3>Hello Admin!</h3>
";
        
        $__internal_6f337ef7d4635374f290d4446146acb6c5ab688042ebd9545ecee47caec0e568->leave($__internal_6f337ef7d4635374f290d4446146acb6c5ab688042ebd9545ecee47caec0e568_prof);

    }

    // line 13
    public function block_middle($context, array $blocks = array())
    {
        $__internal_e56a7b9fe72e7a66a60ad7e8b461db7d67f41c57c103969109219383e3a0b8e4 = $this->env->getExtension("native_profiler");
        $__internal_e56a7b9fe72e7a66a60ad7e8b461db7d67f41c57c103969109219383e3a0b8e4->enter($__internal_e56a7b9fe72e7a66a60ad7e8b461db7d67f41c57c103969109219383e3a0b8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 14
        echo "    <h1>All users:</h1>
    <table class=\"table table-hover\">
        <th class='text-center'>Username</th>
        <th class='text-center'>Email</th>


            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                ";
            if (($this->getAttribute($context["user"], "username", array()) != "Admin")) {
                // line 22
                echo "                <tr>
                    <td><a href=\"/user/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                    <td><a class=\"btn btn-danger\" href=\"/admin/remove/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">Remove</a></td>
                </tr>
                ";
            }
            // line 28
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
";
        
        $__internal_e56a7b9fe72e7a66a60ad7e8b461db7d67f41c57c103969109219383e3a0b8e4->leave($__internal_e56a7b9fe72e7a66a60ad7e8b461db7d67f41c57c103969109219383e3a0b8e4_prof);

    }

    // line 31
    public function block_right($context, array $blocks = array())
    {
        $__internal_f0e99ab3912debc400c60e36dbd3f472ef24ebbd3d4047dd57fa324554b2a785 = $this->env->getExtension("native_profiler");
        $__internal_f0e99ab3912debc400c60e36dbd3f472ef24ebbd3d4047dd57fa324554b2a785->enter($__internal_f0e99ab3912debc400c60e36dbd3f472ef24ebbd3d4047dd57fa324554b2a785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 32
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_f0e99ab3912debc400c60e36dbd3f472ef24ebbd3d4047dd57fa324554b2a785->leave($__internal_f0e99ab3912debc400c60e36dbd3f472ef24ebbd3d4047dd57fa324554b2a785_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:showAllUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  133 => 31,  125 => 29,  119 => 28,  113 => 25,  109 => 24,  103 => 23,  100 => 22,  97 => 21,  93 => 20,  85 => 14,  79 => 13,  71 => 11,  65 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}All users{% endblock %}*/
/* */
/* {% block jumbotron %}*/
/* <h1>Welcome to the admin panel</h1>*/
/* */
/* {% endblock %}*/
/* */
/* {% block left %}*/
/*     <h3>Hello Admin!</h3>*/
/* {% endblock %}*/
/* {% block middle %}*/
/*     <h1>All users:</h1>*/
/*     <table class="table table-hover">*/
/*         <th class='text-center'>Username</th>*/
/*         <th class='text-center'>Email</th>*/
/* */
/* */
/*             {% for user in users %}*/
/*                 {% if user.username != "Admin"%}*/
/*                 <tr>*/
/*                     <td><a href="/user/{{user.id}}">{{user.username}}</a></td>*/
/*                     <td>{{user.email}}</td>*/
/*                     <td><a class="btn btn-danger" href="/admin/remove/{{user.id}}">Remove</a></td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
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
