<footer class="section-footer bg-secondary">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-md-3 col-sm-3 white">
                    <h5 class="title">Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><?=$this->Html->link("Help Center",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Money refund",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Terms and Policy",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Open dispute",['controller'=>''])?></li>
                    </ul>
                </aside>
                <aside class="col-md-3 col-sm-3 white">
                    <h5 class="title">My Account</h5>
                    <ul class="list-unstyled">
                        <li><?=$this->Html->link("User Login",['controller'=>''])?></li>
                        <li><?=$this->Html->link("User register",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Account Setting",['controller'=>''])?></li>
                        <li><?=$this->Html->link("My Orders",['controller'=>''])?></li>
                        <li><?=$this->Html->link("My Wishlist",['controller'=>''])?></li>
                    </ul>
                </aside>
                <aside class="col-md-3 col-sm-3 white">
                    <h5 class="title">About</h5>
                    <ul class="list-unstyled">
                        <li><?=$this->Html->link("Our history",['controller'=>''])?></li>
                        <li><?=$this->Html->link("How to buy",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Delivery and payment",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Advertice",['controller'=>''])?></li>
                        <li><?=$this->Html->link("Partnership",['controller'=>''])?></li>
                    </ul>
                </aside>
                <aside class="col-md-3 col-sm-3 white">
                    <h5 class="title">Contacts</h5>
                        <p><strong>Phone :</strong> +123456789<br/>
                        <strong>Fax :</strong> +123456789</p>
                        <div class="btn-group white">
                            <?= $this->Html->link('<i class="fa fa-facebook-f"></i>', ['url' => 'https://wwww.facebook.com'], ['class' => 'waves-effect waves-facebook', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fa fa-instagram"></i>', ['url' => 'https://wwww.facebook.com'], ['class' => 'waves-effect waves-instagram', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fa fa-youtube"></i>', ['url' => 'https://wwww.facebook.com'], ['class' => 'waves-effect waves-youtube', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="fa fa-twitter"></i>', ['url' => 'https://wwww.facebook.com'], ['class' => 'waves-effect waves-twitter', 'escape' => false]) ?>
                        </div>
                </aside>
            </div>
        </section>
        <section class="footer-bottom row border-top-white">
            <div class="col-sm-6">
                <p class="text-white-50">Made By Nauthiz</p>
            </div>
            <div class="col-sm-6">
                <p class="text-md-right text-white-50">Copyright © 2019 | wrpd.com</p>
            </div>
        </section>
    </div>
</footer>