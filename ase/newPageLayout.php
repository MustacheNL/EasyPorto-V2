<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php';
require_once 'includes/menu.php'; ?>

<div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
    <div class="g-pa-20">
        <div class="row">
            <div class="col-md-12">
                <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-30--md">
                    <header>
                        <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            Informatie aanpassen</h2>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                    <form>
                        <div class="g-mb-20">
                            <label class="g-mb-10" for="#bio">Veld 1</label>

                            <div class="form-group mb-0">
                                <textarea id="bio"
                                          class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12"
                                          rows="5"></textarea>
                            </div>
                        </div>

                        <header>
                            <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                                Extra kop</h2>
                        </header>

                        <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                        <div class="row">
                            <div class="col-md-6 g-mb-20">
                                <label class="g-mb-10" for="#dateFrom">Van</label>

                                <div class="form-group mb-0">
                                    <div class="form-group mb-0">
                                        <div id="dateFromWrapper"
                                             class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                                            <input id="dateFrom"
                                                   class="form-control form-control-md g-bg-white g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12"
                                                   type="text" data-rp-wrapper="#dateFromWrapper"
                                                   data-rp-date-format="d M Y">
                                            <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                              <i class="hs-admin-calendar g-absolute-centered"></i>
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 g-mb-20">
                                <label class="g-mb-10" for="#dateTo">Tot</label>

                                <div class="form-group mb-0">
                                    <div id="dateToWrapper"
                                         class="u-datepicker-right u-datepicker--v3 w-100 g-pos-rel g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                                        <input id="dateTo"
                                               class="form-control form-control-md g-bg-white g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12"
                                               type="text" data-rp-wrapper="#dateToWrapper" data-rp-date-format="d M Y">
                                        <span class="g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-40 h-100 g-font-size-18 g-color-gray-light-v6 rounded-0">
                            <i class="hs-admin-calendar g-absolute-centered"></i>
                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 g-mb-20">
                                <label class="g-mb-10" for="#company">Veld 2</label>

                                <div class="form-group mb-0">
                                    <input id="company"
                                           class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12"
                                           type="text">
                                </div>
                            </div>

                            <div class="col-md-6 g-mb-20">
                                <label class="g-mb-10" for="#position">Veld 3</label>

                                <div class="form-group mb-0">
                                    <input id="position"
                                           class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12"
                                           type="text">
                                </div>
                            </div>
                        </div>

                        <div class="g-mb-30">
                            <label class="g-mb-10" for="#expirience">Veld 4</label>

                            <div class="form-group mb-0">
                                <textarea id="expirience"
                                          class="form-control form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-4 g-px-20 g-py-12"
                                          rows="4"></textarea>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-md btn-xl--md u-btn-lightblue-v3 g-width-160--md g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10"
                                    type="submit">Opslaan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>
</html>