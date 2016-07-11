<?php

/* AppBundle:User:deleteUser.html.twig */
class __TwigTemplate_2f2f070e8bc583e8da8aa7e0646920abfe3a2c2437c1a4d9b43ec026d6c4c36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:deleteUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_d3ae351e4f4500a994bcba8e0180ecf30851d983ba8ff787ef2e066164b1ddac = $this->env->getExtension("native_profiler");
        $__internal_d3ae351e4f4500a994bcba8e0180ecf30851d983ba8ff787ef2e066164b1ddac->enter($__internal_d3ae351e4f4500a994bcba8e0180ecf30851d983ba8ff787ef2e066164b1ddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:deleteUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3ae351e4f4500a994bcba8e0180ecf30851d983ba8ff787ef2e066164b1ddac->leave($__internal_d3ae351e4f4500a994bcba8e0180ecf30851d983ba8ff787ef2e066164b1ddac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8b8df7db905960ee0135c9614a491974ab2f2a089fb85036d68c08497d80418 = $this->env->getExtension("native_profiler");
        $__internal_c8b8df7db905960ee0135c9614a491974ab2f2a089fb85036d68c08497d80418->enter($__internal_c8b8df7db905960ee0135c9614a491974ab2f2a089fb85036d68c08497d80418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin panel";
        
        $__internal_c8b8df7db905960ee0135c9614a491974ab2f2a089fb85036d68c08497d80418->leave($__internal_c8b8df7db905960ee0135c9614a491974ab2f2a089fb85036d68c08497d80418_prof);

    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        $__internal_faa0c39fd8c134cfd30393c6328d1ea96b07e43e54e2807c551345de8359bcb3 = $this->env->getExtension("native_profiler");
        $__internal_faa0c39fd8c134cfd30393c6328d1ea96b07e43e54e2807c551345de8359bcb3->enter($__internal_faa0c39fd8c134cfd30393c6328d1ea96b07e43e54e2807c551345de8359bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 6
        echo "<h1>User deleted</h1>
    <h3><a class=\"btn btn-success btn-block\" href=\"/admin/users\">Back</a></h3>
";
        
        $__internal_faa0c39fd8c134cfd30393c6328d1ea96b07e43e54e2807c551345de8359bcb3->leave($__internal_faa0c39fd8c134cfd30393c6328d1ea96b07e43e54e2807c551345de8359bcb3_prof);

    }

    // line 9
    public function block_right($context, array $blocks = array())
    {
        $__internal_83699e34b3971e97dcca6059bcb0c774278dc4eb7bd7323649a4c76c9e732b85 = $this->env->getExtension("native_profiler");
        $__internal_83699e34b3971e97dcca6059bcb0c774278dc4eb7bd7323649a4c76c9e732b85->enter($__internal_83699e34b3971e97dcca6059bcb0c774278dc4eb7bd7323649a4c76c9e732b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 10
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_83699e34b3971e97dcca6059bcb0c774278dc4eb7bd7323649a4c76c9e732b85->leave($__internal_83699e34b3971e97dcca6059bcb0c774278dc4eb7bd7323649a4c76c9e732b85_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:deleteUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  63 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Admin panel{% endblock %}*/
/* */
/* {% block middle %}*/
/* <h1>User deleted</h1>*/
/*     <h3><a class="btn btn-success btn-block" href="/admin/users">Back</a></h3>*/
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
