<?php

/* AcmeShopBundle:Shop:header.html.twig */
class __TwigTemplate_ed05719a125d49ddedacc609b12f6f60e8c1618483411cba843d1fbca4944a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-xs-9 col-xs-offset-3\">
        <ul class=\"nav nav-tabs my-nav-style\">
            <li role=\"presentation\" ";
        // line 4
        if (($this->getContext($context, "name") == "main")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("shop", array("name" => "main"));
        echo "\">Главная</a></li>
            <li role=\"presentation\" ";
        // line 5
        if (($this->getContext($context, "name") == "add")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("shop", array("name" => "add"));
        echo "\">Добавить товар</a></li>
            <li role=\"presentation\" ";
        // line 6
        if (($this->getContext($context, "name") == "contact")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("shop", array("name" => "contact"));
        echo "\">...</a></li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeShopBundle:Shop:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
