jQuery(document).ready(function($) {
    'use strict';

    // Calculator Form Handler
    var CalculatorForm = {
        
        // Initialize the calculator
        init: function() {
            this.bindEvents();
            this.calculateTotal();
        },
        
        // Bind events to form elements
        bindEvents: function() {
            var self = this;
            
            // Bind change events to all form fields
            $('#calculator-form-container select[data-points-field]').on('change', function() {
                self.updatePointsDisplay();
                self.calculateTotal();
            });
            
            $('#calculator-form-container input[type="radio"][data-points-field]').on('change', function() {
                self.updatePointsDisplay();
                self.calculateTotal();
            });
            
            // Bind reset button
            $('#reset_calculator').on('click', function() {
                self.resetForm();
            });
        },
        
        // Update individual points display
        updatePointsDisplay: function() {
            var self = this;
            var pointsFields = [
                'age',
                'english',
                'overseas_work',
                'australian_work',
                'qualifications',
                'australian_study',
                'specialist_education',
                'community_language',
                'regional_study',
                'partner_skills',
                'professional_year',
                'nomination'
            ];
            
            pointsFields.forEach(function(fieldName) {
                var points = self.getFieldPoints(fieldName);
                $('#' + fieldName + '_points').val(points);
            });
        },
        
        // Get points for a specific field
        getFieldPoints: function(fieldName) {
            var selector = '[data-points-field="' + fieldName + '"]';
            var element = $(selector + ':checked, ' + selector + ' option:selected');
            
            if (element.length === 0) {
                // For select elements, check the selected option
                element = $(selector);
                if (element.is('select')) {
                    var selectedValue = element.val();
                    return selectedValue ? parseInt(selectedValue) : 0;
                }
                return 0;
            }
            
            var value = element.val();
            return value ? parseInt(value) : 0;
        },
        
        // Calculate total points
        calculateTotal: function() {
            var total = 0;
            var pointsInputs = $('#calculator-form-container .points-row input[readonly]').not('#total_points');
            
            pointsInputs.each(function() {
                var points = parseInt($(this).val()) || 0;
                total += points;
            });
            
            $('#total_points').val(total);
            
            // Add visual feedback based on points
            this.updateTotalDisplay(total);
        },
        
        // Update total display with visual feedback
        updateTotalDisplay: function(total) {
            var $totalInput = $('#total_points');
            var $wrapper = $('.calculator-form-wrapper');
            
            // Remove existing classes
            $wrapper.removeClass('points-low points-medium points-high points-excellent');
            
            // Add class based on total points
            if (total < 60) {
                $wrapper.addClass('points-low');
            } else if (total < 75) {
                $wrapper.addClass('points-medium');
            } else if (total < 90) {
                $wrapper.addClass('points-high');
            } else {
                $wrapper.addClass('points-excellent');
            }
            
            // Add a subtle animation to the total
            $totalInput.addClass('updated');
            setTimeout(function() {
                $totalInput.removeClass('updated');
            }, 500);
        },
        
        // Reset the form
        resetForm: function() {
            var $container = $('#calculator-form-container');
            
            // Reset all select elements
            $container.find('select').each(function() {
                $(this).val('');
            });
            
            // Reset all radio buttons
            $container.find('input[type="radio"]').prop('checked', false);
            
            // Reset all points displays
            $container.find('.points-row input[readonly]').val('0');
            
            // Remove visual feedback classes
            $('.calculator-form-wrapper').removeClass('points-low points-medium points-high points-excellent');
            
            // Show reset confirmation
            this.showResetConfirmation();
        },
        
        // Show reset confirmation
        showResetConfirmation: function() {
            var $button = $('#reset_calculator');
            var originalText = $button.val();
            
            $button.val('Calculator Reset!').addClass('reset-confirmed');
            
            setTimeout(function() {
                $button.val(originalText).removeClass('reset-confirmed');
            }, 2000);
        }
    };
    
    // Initialize the calculator when DOM is ready
    CalculatorForm.init();
    
    // Add CSS for animation effects
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .calculator-form-wrapper .total-points-input.updated {
                transform: scale(1.1);
                transition: transform 0.3s ease;
            }
            
            .calculator-form-wrapper.points-low .total-points-input {
                background: #e74c3c !important;
            }
            
            .calculator-form-wrapper.points-medium .total-points-input {
                background: #f39c12 !important;
            }
            
            .calculator-form-wrapper.points-high .total-points-input {
                background: #27ae60 !important;
            }
            
            .calculator-form-wrapper.points-excellent .total-points-input {
                background: #2ecc71 !important;
                box-shadow: 0 0 10px rgba(46, 204, 113, 0.3);
            }
            
            .reset-button.reset-confirmed {
                background: #27ae60 !important;
                transform: scale(1.05);
            }
            
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
            
            .calculator-form-wrapper.points-excellent .total-points-input {
                animation: pulse 2s infinite;
            }
        `)
        .appendTo('head');
});