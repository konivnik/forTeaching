<?php

/* AcmeShopBundle:Shop:leftBlock.html.twig */
class __TwigTemplate_6aeed135008af05eaad7ec9f5edb55bc6ad9996f42032cf34b0ee4c934e3a460 extends Twig_Template
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
        echo "<form class=\"form-horizontal\">
    <div class=\"form-group\">
        <label for=\"inputEmail3\" class=\"col-xl-2 control-label\">Email</label>
        <div class=\"col-xl-10\">
            <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"inputPassword3\" class=\"col-xl-2 control-label\">Password</label>
        <div class=\"col-xl-10\">
            <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-xl-offset-2 col-xl-10\">
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\"> Remember me
                </label>
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-xl-offset-2 col-xl-10\">
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "AcmeShopBundle:Shop:leftBlock.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
