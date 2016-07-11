<?php

/* AppBundle:User:deleteEvent.html.twig */
class __TwigTemplate_ef33b2b655680fb424704a6d7d03c675877105dd3926c57b4dfc57dc690fa820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:deleteEvent.html.twig", 1);
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
        $__internal_4766ab923162f366ad23796e82ab07a436e789f41c464380e6a2efea006e35c5 = $this->env->getExtension("native_profiler");
        $__internal_4766ab923162f366ad23796e82ab07a436e789f41c464380e6a2efea006e35c5->enter($__internal_4766ab923162f366ad23796e82ab07a436e789f41c464380e6a2efea006e35c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:deleteEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4766ab923162f366ad23796e82ab07a436e789f41c464380e6a2efea006e35c5->leave($__internal_4766ab923162f366ad23796e82ab07a436e789f41c464380e6a2efea006e35c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd7918a6b025da15352e264977632fc13a8a4a66a3518559b655055956329688 = $this->env->getExtension("native_profiler");
        $__internal_cd7918a6b025da15352e264977632fc13a8a4a66a3518559b655055956329688->enter($__internal_cd7918a6b025da15352e264977632fc13a8a4a66a3518559b655055956329688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin panel";
        
        $__internal_cd7918a6b025da15352e264977632fc13a8a4a66a3518559b655055956329688->leave($__internal_cd7918a6b025da15352e264977632fc13a8a4a66a3518559b655055956329688_prof);

    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        $__internal_259fc48f92146209a65216e556ac78c40a7dc50fe3d7281f415764ad5015010c = $this->env->getExtension("native_profiler");
        $__internal_259fc48f92146209a65216e556ac78c40a7dc50fe3d7281f415764ad5015010c->enter($__internal_259fc48f92146209a65216e556ac78c40a7dc50fe3d7281f415764ad5015010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 6
        echo "    <h1>Event deleted</h1>
    <h3><a class=\"btn btn-success btn-block\" href=\"/admin/events\">Back</a></h3>
";
        
        $__internal_259fc48f92146209a65216e556ac78c40a7dc50fe3d7281f415764ad5015010c->leave($__internal_259fc48f92146209a65216e556ac78c40a7dc50fe3d7281f415764ad5015010c_prof);

    }

    // line 9
    public function block_right($context, array $blocks = array())
    {
        $__internal_de43abecd4c41bb188e39e3bff0196037a776cf1a81dfd5eac1458522b98d563 = $this->env->getExtension("native_profiler");
        $__internal_de43abecd4c41bb188e39e3bff0196037a776cf1a81dfd5eac1458522b98d563->enter($__internal_de43abecd4c41bb188e39e3bff0196037a776cf1a81dfd5eac1458522b98d563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 10
        echo "    <div class=\"btn-group-vertical\">
        <a class=\"btn btn-success\" href=\"/index\">User page</a>
        <a class=\"btn btn-success\" href=\"/admin/index\">Main</a>
        <a class=\"btn btn-success\" href=\"/admin/crews\">All active groups</a>
        <a class=\"btn btn-success\" href=\"/admin/events\">All active events</a>
        <a class=\"btn btn-success\" href=\"/admin/users\">All users</a>
    </div>
";
        
        $__internal_de43abecd4c41bb188e39e3bff0196037a776cf1a81dfd5eac1458522b98d563->leave($__internal_de43abecd4c41bb188e39e3bff0196037a776cf1a81dfd5eac1458522b98d563_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:deleteEvent.html.twig";
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
/*     <h1>Event deleted</h1>*/
/*     <h3><a class="btn btn-success btn-block" href="/admin/events">Back</a></h3>*/
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
