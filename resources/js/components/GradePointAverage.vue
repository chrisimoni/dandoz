<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header">GPA Calculator</div>

                    <div class="card-body">
                        <small>Note: Ensure you enter scores and course units appropriately </small>
                        <div class="table-responsive-sm">
                            <table class="table table-bordered" width="100%">
                                <tr>
                                    <th>Score</th>
                                    <th>Course Unit</th>
                                    <th>Grade Point</th>
                                    <th>WGP </th>
                                </tr>
                                <tr v-for="(item, index) in items" :key="index">
                                    <td><input type="text" v-model="item.score" @keypress="isNumber" @keyup="gradePoint(item)" ></td>
                                    <td><input type="text" v-model="item.unit" @keypress="isNumber" @keyup="gradePoint(item)" max="4"></td>
                                    <td>{{ item.point }}</td>
                                    <td>{{ item.wgp }}</td>
                                </tr>
                                <tr>
                                    <td><span style="font-size: 20px;">GPA: {{ total }}</span></td>
                                    <td><input type="text" v-model="rowValue"><br> <br>
                                    <input class="btn btn-outline-primary btn-sm" type="submit" @click="addRows" value="Add Row"></td>
                                    <td><input type="submit" class="btn btn-outline-danger btn-sm" @click="reset" value="Reset"></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data: function (){
        return {
            rowValue: '2',
            items: [
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''}
            ],
            totalUnit: 0,
            totalPoint: 0,
            //wgp: 0
        }
    }, 
    mounted: function() {
        console.log('gpa component mounted');
    },
    computed: {
        total: function() {
            let totalGpa=0,
                totalUnit=0,
                totalWgp=0;
            this.items.forEach(function (item) {
                if(item.score !== '' && item.unit !== '') {
                    totalUnit += parseFloat(item.unit);
                    totalWgp += parseFloat(item.point) * parseFloat(item.unit);
                    //console.log(parseFloat(item.point) + parseFloat(item.unit));
                    //console.log(totalWgp/totalUnit);
                    //totalGpa += (totalWgp / totalUnit);
                }else {

                }
            });
            totalGpa = (totalWgp/totalUnit).toFixed(2);
            return isNaN(parseFloat(totalGpa)) ? 0.00 : totalGpa;
        }
    },
    methods: {
        addRows: function() {
            for(let i = 0; i < this.rowValue; i++) {
                this.items.push({score: '', unit: '', point: '', wgp: ''});
            }
        },
        reset: function() {
            this.items = [
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''},
                {score: '', unit: '', point: '', wgp: ''}
            ],
            this.total = 0;
        },
        isNumber: function(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && (charCode < 48 || charCode > 57))) {
                evt.preventDefault();;
            } else {
                return true;
            }
        },
        gradePoint: function(item) {
            if(item.score !== '') {
                item.point = this.calculatePoint(item.score).toFixed( 2 );
                item.wgp = parseFloat(item.unit * item.point);
            }else {
                item.point = '';
                item.wgp = '';
            }

            if(item.score !== '' && item.unit !== '') {
                // this.totalUnit += parseFloat(item.unit);
                // this.totalPoint += parseFloat(item.point);
                
            }
            
            
        },
        calculatePoint: function(score) {
            switch (true) {
                case score >= 75:
                    return 4.00;
                    break;
                case score >= 70:
                    return 3.5;
                    break;
                case score >= 65:
                    return 3.25;
                    break;
                case score >= 60:
                    return 3.0;
                    break;
                case score >= 55:
                    return 2.75;
                    break;
                case score >= 50:
                    return 2.50;
                    break;
                case score >= 45:
                    return 2.25;
                    break;
                case score >= 40:
                    return 2.00;
                    break;
                case score >= 0:
                    return 0.00;
                    break;
                default:
                    console.log('Sorry, we are out of ' + score + '.');
            }
        }
    }
}
</script>

<style scoped>
 input[type=text] {
    width: 100%;
}
</style>

