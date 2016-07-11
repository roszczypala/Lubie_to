<?php

/* AppBundle:Message:messages.html.twig */
class __TwigTemplate_e8f90ced894a70bf43ed427193d6392b61178e3f8f6591485b7eb7ec7b90cc66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Message:messages.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'left' => array($this, 'block_left'),
            'middle' => array($this, 'block_middle'),
            'middle1' => array($this, 'block_middle1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34cd61f23a38be38cb6e7367e89e5ec05fb48bf17e3071405ba41eae2eb272c5 = $this->env->getExtension("native_profiler");
        $__internal_34cd61f23a38be38cb6e7367e89e5ec05fb48bf17e3071405ba41eae2eb272c5->enter($__internal_34cd61f23a38be38cb6e7367e89e5ec05fb48bf17e3071405ba41eae2eb272c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Message:messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34cd61f23a38be38cb6e7367e89e5ec05fb48bf17e3071405ba41eae2eb272c5->leave($__internal_34cd61f23a38be38cb6e7367e89e5ec05fb48bf17e3071405ba41eae2eb272c5_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_d032490db8eae348a040a1445ec5c5f6b63a72b268f06b588a331e7742dc3f2f = $this->env->getExtension("native_profiler");
        $__internal_d032490db8eae348a040a1445ec5c5f6b63a72b268f06b588a331e7742dc3f2f->enter($__internal_d032490db8eae348a040a1445ec5c5f6b63a72b268f06b588a331e7742dc3f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 4
        echo "    <h1>Messages</h1>
    
    ";
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            echo "        <div class=\"flash-notice\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice1"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "        <div class=\"flash-notice\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d032490db8eae348a040a1445ec5c5f6b63a72b268f06b588a331e7742dc3f2f->leave($__internal_d032490db8eae348a040a1445ec5c5f6b63a72b268f06b588a331e7742dc3f2f_prof);

    }

    // line 21
    public function block_left($context, array $blocks = array())
    {
        $__internal_e4503855175c506e2096e4adc260e0d9888152a78ad8fe21d463c7e2229f9df0 = $this->env->getExtension("native_profiler");
        $__internal_e4503855175c506e2096e4adc260e0d9888152a78ad8fe21d463c7e2229f9df0->enter($__internal_e4503855175c506e2096e4adc260e0d9888152a78ad8fe21d463c7e2229f9df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 22
        echo "    <h3>User: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
";
        
        $__internal_e4503855175c506e2096e4adc260e0d9888152a78ad8fe21d463c7e2229f9df0->leave($__internal_e4503855175c506e2096e4adc260e0d9888152a78ad8fe21d463c7e2229f9df0_prof);

    }

    // line 25
    public function block_middle($context, array $blocks = array())
    {
        $__internal_7f84ce9f11f2d9fed8fea0ff513e76858f992d8b12ff2bb99d00789df052e53c = $this->env->getExtension("native_profiler");
        $__internal_7f84ce9f11f2d9fed8fea0ff513e76858f992d8b12ff2bb99d00789df052e53c->enter($__internal_7f84ce9f11f2d9fed8fea0ff513e76858f992d8b12ff2bb99d00789df052e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        echo "  

    <h2>Outbox :</h2>
    <table class=\"table table-hover\">

    <th class='text-center'>Receiver</th>
    <th class='text-center'>Title</th>
    <th class='text-center'>Date</th>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sentMessages"]) ? $context["sentMessages"] : $this->getContext($context, "sentMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "        <tr>
            <td><a href=\"/user/";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "receiver", array()), "html", null, true);
            echo "</a></td>
            <td> <a href=\"/message/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        <p> No messages found</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </table>
";
        
        $__internal_7f84ce9f11f2d9fed8fea0ff513e76858f992d8b12ff2bb99d00789df052e53c->leave($__internal_7f84ce9f11f2d9fed8fea0ff513e76858f992d8b12ff2bb99d00789df052e53c_prof);

    }

    // line 45
    public function block_middle1($context, array $blocks = array())
    {
        $__internal_718d28d43ab6fe2bc36b4d16e2b0900613596201e9a31d968b5ec05f119f76ef = $this->env->getExtension("native_profiler");
        $__internal_718d28d43ab6fe2bc36b4d16e2b0900613596201e9a31d968b5ec05f119f76ef->enter($__internal_718d28d43ab6fe2bc36b4d16e2b0900613596201e9a31d968b5ec05f119f76ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle1"));

        echo "                    
    <table class=\"table table-hover\">
    <h2>Inbox : </h2>
    <th class='text-center'>Author</th>
    <th class='text-center'>Title</th>
    <th class='text-center'>Date</th>
    <th class='text-center'>Delete</th>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["receivedMessages"]) ? $context["receivedMessages"] : $this->getContext($context, "receivedMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 53
            echo "        <tr>
            <td> <a href=\"/user/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array()), "html", null, true);
            echo "</a></td>
            <td> <a href=\"/message/";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td><a href=\"/message/delete/";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove-sign remove\"></span></a></td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "        <p> No messages found</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </table>
";
        
        $__internal_718d28d43ab6fe2bc36b4d16e2b0900613596201e9a31d968b5ec05f119f76ef->leave($__internal_718d28d43ab6fe2bc36b4d16e2b0900613596201e9a31d968b5ec05f119f76ef_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Message:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  208 => 60,  200 => 57,  196 => 56,  190 => 55,  184 => 54,  181 => 53,  176 => 52,  162 => 45,  154 => 42,  147 => 40,  139 => 37,  133 => 36,  127 => 35,  124 => 34,  119 => 33,  104 => 25,  94 => 22,  88 => 21,  73 => 15,  70 => 14,  65 => 13,  55 => 9,  52 => 8,  47 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block jumbotron %}*/
/*     <h1>Messages</h1>*/
/*     */
/*     {# Add a notice when message is removed#}*/
/*     {% for flash_message in app.session.flashBag.get('notice') %}*/
/*         <div class="flash-notice">*/
/*             {{ flash_message }}*/
/*         </div>*/
/* */
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashBag.get('notice1') %}*/
/*         <div class="flash-notice">*/
/*             {{ flash_message }}*/
/*         </div>*/
/* */
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block left %}*/
/*     <h3>User: {{user.username}}</h3>*/
/* {% endblock %}*/
/* */
/* {% block middle %}  */
/* */
/*     <h2>Outbox :</h2>*/
/*     <table class="table table-hover">*/
/* */
/*     <th class='text-center'>Receiver</th>*/
/*     <th class='text-center'>Title</th>*/
/*     <th class='text-center'>Date</th>*/
/*     {%for message in sentMessages %}*/
/*         <tr>*/
/*             <td><a href="/user/{{message.receiver.id}}">{{message.receiver}}</a></td>*/
/*             <td> <a href="/message/{{message.id}}">{{message.title}}</a></td>*/
/*             <td>{{message.date|date("Y-m-d")}}</td>*/
/*         </tr>*/
/*     {% else %}*/
/*         <p> No messages found</p>*/
/*     {%endfor%}*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block middle1 %}                    */
/*     <table class="table table-hover">*/
/*     <h2>Inbox : </h2>*/
/*     <th class='text-center'>Author</th>*/
/*     <th class='text-center'>Title</th>*/
/*     <th class='text-center'>Date</th>*/
/*     <th class='text-center'>Delete</th>*/
/*     {% for message in receivedMessages %}*/
/*         <tr>*/
/*             <td> <a href="/user/{{message.sender.id}}">{{message.sender}}</a></td>*/
/*             <td> <a href="/message/{{message.id}}">{{message.title}}</a></td>*/
/*             <td>{{message.date|date("Y-m-d")}}</td>*/
/*             <td><a href="/message/delete/{{message.id}}"><span class="glyphicon glyphicon-remove-sign remove"></span></a></td>*/
/*         </tr>*/
/*     {% else %}*/
/*         <p> No messages found</p>*/
/*     {%endfor%}*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* */
/* */
