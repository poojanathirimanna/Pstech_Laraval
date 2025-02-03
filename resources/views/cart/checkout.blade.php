@extends('layouts.adminfrontend')

<div class="container my-5">
    <h1 class="text-center mb-4 text-primary"><b>Checkout</b></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Customer Details</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <!-- Customer Details -->
                        <div class="form-group mb-3">
                            <label for="customer_name" class="form-label fw-bold">Customer Name:</label>
                            <input type="text" id="customer_name" name="customer_name" class="form-control border-secondary" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="customer_address" class="form-label fw-bold">Customer Address:</label>
                            <textarea id="customer_address" name="customer_address" class="form-control border-secondary" rows="3" placeholder="Enter your address" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="customer_email" class="form-label fw-bold">Customer Email:</label>
                            <input type="email" id="customer_email" name="customer_email" class="form-control border-secondary" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="customer_phone" class="form-label fw-bold">Customer Phone:</label>
                            <input type="tel" id="customer_phone" name="customer_phone" class="form-control border-secondary" placeholder="Enter your phone number" required>
                        </div>

                        <!-- Payment Method -->
                        <div class="form-group mb-4">
                            <h5 class="fw-bold">Payment Method:</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="Cash on Delivery" required>
                                <label class="form-check-label" for="cash_on_delivery">
                                    Cash on Delivery
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="pay_online" value="Pay Online" required>
                                <label class="form-check-label" for="pay_online">
                                    Store Pickup
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg px-5">
                                <i class="fas fa-check-circle me-2"></i>Confirm Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
